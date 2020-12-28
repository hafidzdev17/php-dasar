<?php
$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["M", "Hafidz", "Masruri"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Hafidz";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Hafidz";
var_dump($names);

var_dump(count($names));

$data = array(
    "id" => 1,
    "name" => "Hafid masruri",
    "age" => 30,
    "address" => array(
        "city" => "Lumajang",
        "country" => "Indonesia"
    )
);
var_dump($data);

var_dump($data["name"]);
print_r($data["address"]["country"]);

