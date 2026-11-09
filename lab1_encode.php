<?php

$students = array(
    array(
        "name" => "Lucky",
        "age" => 22,
        "course" => "BSIT",
        "email" => "martizanolucky53@gmail.com"
    ),

    array(
        "name" => "Billy",
        "age" => 21,
        "course" => "BSIT",
        "email" => "billynaire@gmail.com"
    )
);

$json = json_encode($students);

echo $json;

?>
