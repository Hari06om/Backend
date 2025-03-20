<?php
session_start();
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        $_SESSION["user"] = ["id" => $id, "name" => $name, "email" => $email];
        header("Location: ../dashboard.php");
    } else {
        echo "<script>alert('Invalid Credentials!'); window.location.href='../index.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
