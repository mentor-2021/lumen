<?php

$i = 0;
$data = [];
while ($i++ < 100) {
    $tmp = [
        "id" => $i,
        "name" => "user{$i}",
        "email" => "user_{$i}@gmail.com",
    ];
    array_push($data, $tmp);
}

return $data;
