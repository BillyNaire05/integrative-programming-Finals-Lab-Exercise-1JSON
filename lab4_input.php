<?php

header('Content-Type: text/plain');

$json = file_get_contents('php://input');

$students = json_decode($json);

if (is_array($students)) {

    foreach ($students as $student) {

        echo "Name: " . $student->name . "\n";
        echo "Age: " . $student->age . "\n";
        echo "Course: " . $student->course . "\n";
        echo "Email: " . $student->email . "\n\n";

    }

} else {

    echo "Invalid JSON data.";

}

?>