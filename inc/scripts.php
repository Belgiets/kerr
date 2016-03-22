<?php
$config = [
    'mail' => [
        'host'          => 'smtp.gmail.com',
        'user'          => '',
        'pass'          => '',
        'auth_protocol' => 'tls',
        'port'          => 587,
        'admin_email'   => '',
        'reply_to_mail' => '',
        'reply_to_name' => '',
        'from_email'    => '',
        'from_name'     => ''
    ],
    'includes' => [
        'vendor/class.phpmailer',
        'vendor/class.smtp',
        'ajax'
    ]
];

//includes
foreach ($config['includes'] as $include) {
    include_once "{$include}.php";
}

/**
 * get data from csv file
 *
 * @param $filename string
 * @return array
 */
function getDataCsv($filename) {
    return array_map('str_getcsv', file("csv/{$filename}"));
}

/**
 * get countries in convenient format
 *
 * @return array
 */
function getCountries() {
    $cntrs = [];
    $data  = getDataCsv('countries.csv');

    if (($data) && is_array($data)) {
        foreach ($data as $row) {
            $cntrs[$row[1]] = $row[0];
        }
        asort($cntrs);
    }

    return $cntrs;
}

/**
 * get state/province by country code in convenient format
 *
 * @param null $country
 * @return array
 */
function getStatesProv($country = null) {
    $stpr = [];
    $data  = getDataCsv('states.csv');

    if (($data) && is_array($data) && ($country)) {
        foreach ($data as $row) {
            if ($country === $row[0]) {
                $stpr[] = $row[1];
            }
        }
        sort($stpr);
    }

    return $stpr;
}

/**
 * send email
 *
 * @param $fields array
 * @return bool
 * @throws phpmailerException
 */
function send_email($fields) {
    $fields = filter_var_array($fields, FILTER_SANITIZE_STRING);
    unset($fields['action']);

    //check if values not empty and prepare html table
    $msg = '<table>';
        foreach ($fields as $name => $val) {
            if (empty($val)) return false;

            $name = str_replace('__', '/', $name);
            $name = str_replace('_', ' ', $name);

            $msg .= "<tr><td><strong>{$name}:</strong></td><td>{$val}</td>";
        }

    $msg .= '</table>';

    global $config;
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = $config['mail']['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $config['mail']['user'];
    $mail->Password = $config['mail']['pass'];
    $mail->SMTPSecure = $config['mail']['auth_protocol'];
    $mail->Port = $config['mail']['port'];

    $mail->AddReplyTo($config['mail']['reply_to_mail'], $config['mail']['reply_to_name']);
    $mail->setFrom($config['mail']['from_email'], $config['mail']['from_name']);
    $mail->addAddress($config['mail']['admin_email']);
    $mail->isHTML(true);

    $mail->Subject = 'Some subject';
    $mail->Body    = $msg;

    if ($mail->send()) return true;

    return false;
}

