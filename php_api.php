<?php

$data1 = array('name' => 'George', 'key' => '1234');
$data2 = array('name' => 'Judy', 'key' => '5678');

// print json_encode($data1);
// print json_encode($data2);

if ($_GET['mode'] == 1) {
    print json_encode($data1);
} elseif ($_GET['mode'] == 2) {
    print json_encode($data2);
} else {
    print "";
}
