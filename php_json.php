<?php
$json_data = '{
    "STATUS": 200,
    "DATA": {
        "ERROR": 0,
        "MESSAGE": "Hello",
        "SUCCESS": 1,
        "erpkey": "2111LV11MD0Y_X_A01AR2111",
        "EMAIL": "zzz@zzz.com"
    }
}';

// 第二個參數設為true，那麼JSON將轉換成陣列。
$data = json_decode($json_data, true);

print $data['DATA']['erpkey'];

print "<br>";
// 如果不提供第二個參數預設為 false，則JSON將轉換成物件。
$data_false = json_decode($json_data, false);

print $data_false->DATA->erpkey;
