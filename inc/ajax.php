<?php
if (isset($_POST)) {
    switch($_POST['action']) {
        case 'get_countries':
            $cntrs = getCountries();

            if (!empty($cntrs)) {
                die(json_encode($cntrs));
            } else {
                die(json_encode("false"));
            }
            break;

        case 'get_stpr':
            $cCode = filter_var($_POST['c_code'], FILTER_SANITIZE_STRING);

            if ($stpr = getStatesProv($cCode)) {
                die(json_encode($stpr));
            } else {
                die(json_encode("false"));
            }
    }
}