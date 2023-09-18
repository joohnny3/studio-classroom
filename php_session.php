<?php
$timeout = 10800;

ini_set('session.gc_maxlifetime', $timeout);
session_start();
date_default_timezone_set('Asia/Taipei');

$current_time = date("Y-m-d H:i:s");
$one_day_later = date('Y-m-d H:i:s', strtotime("+1 day"));
$one_month_later = date('Y-m-d H:i:s', strtotime("+1 month"));
$one_year_later = date('Y-m-d H:i:s', strtotime("+1 year"));


if (!isset($_SESSION['check'])) {
    $_SESSION['check'] = $current_time;
} else {
    $start_time = strtotime($_SESSION['check']);
    $current_time = time();
    $time_reset = $current_time - $start_time;

    if ($time_reset > $timeout) {
        session_unset();
    }
}

if (isset($_SESSION['check'])) {
    print "Now: " . $current_time . "<br>";
    print "Now + 1 day: " . $one_day_later . "<br>";
    print "Now + 1 month: " . $one_month_later . "<br>";
    print "Now + 1 year: " . $one_year_later;
} else {
    print "";
}
