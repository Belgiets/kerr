<?php
$config = [
    'mail'       => [],
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