<?php

header('Content-Type: application/json');

$json = file_get_contents('php://input');

$students = json_decode($json);

if (is_array($students) && count($students) > 0) {

    $response = array(
        "status" => "success",
        "message" => "Student information received successfully!",
        "students" => $students
    );

} else {

    $response = array(
        "status" => "error",
        "message" => "Invalid student information."
    );

}

echo json_encode($response);

?>