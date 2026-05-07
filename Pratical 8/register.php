<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback_form(name, email, feedback)
VALUES ('$name', '$email', '$feedback')";

if ($conn->query($sql) === TRUE) {

    echo "Registration/Feedback submitted successfully!";

} else {

    echo "Error: " . $conn->error;

}

$conn->close();

?>