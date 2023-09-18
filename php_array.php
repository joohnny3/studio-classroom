<?php

$string_src = "BSA01,BSA02,BSA03,BSA04,BSA05,BSA06,BSA07";

$array = explode(",", $string_src);

print "<pre>";
print_r($array);
print "</pre>";

foreach ($array as $key => $value) {
    print ($key + 1) . "->" . $value . "<br>";
}
