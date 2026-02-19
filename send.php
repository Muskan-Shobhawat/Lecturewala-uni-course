<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $course = htmlspecialchars($_POST["course"]);
    $uni = htmlspecialchars($_POST["uni"]);

    $to = "muskanshobhawat123@gmail.com";
    $subject = "New Online Course Enquiry";

    $message = "
    Name: $name\n
    Email: $email\n
    Phone: $phone\n
    Course: $course\n
    University: $uni\n
    ";

    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Success";
    } else {
        echo "Error";
    }
}
?>