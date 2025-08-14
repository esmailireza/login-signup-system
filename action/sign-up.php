<?php
require_once("../config/loader.php");

if (isset($_POST["signup"])) {
    try {
        # params
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    #stmt
    $stmt = $conn->prepare("INSERT INTO users (username, email, mobile, password) VALUES (?, ?, ?, ?)");
    #bindvalue
    $stmt->bind_param("ssss", $username, $email, $mobile, $password);

    #execute
    $stmt ->execute();
    header("Location:../index.php");
    exit;
    } catch (mysqli_sql_exception $e) {
        echo "error is: ", $e->getMessage();
    }
}
