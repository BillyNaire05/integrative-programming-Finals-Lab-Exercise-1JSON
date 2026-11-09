<?php

header('Content-Type: application/json');

$students = array(
    array(
        "id" => 1,
        "name" => "Lucky",
        "age" => 22,
        "course" => "BSIT",
        "email" => "martizanolucky53@gmail.com",
        "status" => "active"
    ),

    array(
        "id" => 2,
        "name" => "Billy",
        "age" => 21,
        "course" => "BSIT",
        "email" => "billynaire@gmail.com",
        "status" => "active"
    )
);

echo json_encode($students);

?>