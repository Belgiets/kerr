<?php
//silence

$countris = array_map('str_getcsv', file('csv/countries.csv'));
$states = array_map('str_getcsv', file('csv/states.csv'));
$stop = null;