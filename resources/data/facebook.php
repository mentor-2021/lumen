<?php

$i = 1001;
$data = [];
$run = 10;
while ($run-- > 0) {
    $tmp = [
        "id" => $i,
        "name" => "fb{$i}",
        "email" => "user_{$i}@gmail.com",
    ];
    $i++;
    array_push($data, $tmp);
}

return $data;
