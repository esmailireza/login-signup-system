<?php
require_once("../config/loader.php");

if (isset($_POST["signin"])) {
    try {
        # params
    $key = $_POST["key"];
    $password = $_POST["password"];
    #stmt
    $stmt = $conn->prepare("SELECT * FROM users WHERE (username= ? OR email= ? OR mobile= ?) AND password= ? LIMIT 1");
    #bindvalue
    $stmt->bind_param("ssss",$key,$key,$key,$password);    
    #execute
    $stmt ->execute();
    $result = $stmt -> get_result();
    $hasuser = $result -> num_rows;
    if ($hasuser) {
        header("Location:../index.php?loggined=ok");
    }else{
        header("Location:../index.php?notuser=ok");
    }
    } catch (mysqli_sql_exception $e) {
        echo "error is: ", $e->getMessage();
    }
}
