<?php

$i = 10;
$data = [];
while ($i++ < 40) {
    $fid = "";
    $gid = "";
    if (20 < $i && $i <= 25) {
        $fid = 1000 + $i - 20;
    }
    if (25 < $i && $i <= 30) {
        $gid = 2000 + $i - 25;
    }
    $tmp = [
        "id" => $i,
        "name" => "user{$i}",
        "email" => "user_{$i}@gmail.com",
        "fid" => $fid,
        "gid" => $gid,
    ];
    array_push($data, $tmp);
}

return $data;
