<?php
header("Content-Type: application/json");
include("../config.php");

$data = json_decode(file_get_contents("php://input"));

if(isset($data->name) && isset($data->email)) {
    $name = $conn->real_escape_string($data->name);
    $email = $conn->real_escape_string($data->email);
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "User added successfully"]);
    } else {
        echo json_encode(["error" => "Failed to add user"]);
    }
} else {
    echo json_encode(["error" => "Invalid input"]);
}
?>
