<?php

$json = '[
    {
        "name": "Lucky",
        "age": 22,
        "course": "BSIT",
        "email": "martizanolucky53@gmail.com"
    },
    {
        "name": "Billy",
        "age": 21,
        "course": "BSIT",
        "email": "billynaire@gmail.com"
    }
]';

$object = json_decode($json);
$array = json_decode($json, true);

echo "<h2>PHP Object</h2>";

foreach ($object as $student) {
    echo "Name: " . $student->name . "<br>";
    echo "Age: " . $student->age . "<br>";
    echo "Course: " . $student->course . "<br>";
    echo "Email: " . $student->email . "<br><br>";
}

echo "<h2>PHP Associative Array</h2>";

foreach ($array as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Course: " . $student["course"] . "<br>";
    echo "Email: " . $student["email"] . "<br><br>";
}

?>