<?php
session_start();
require_once __DIR__.'/../back-end/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // بررسی تکراری نبودن شماره موبایل
    $stmt = $conn->prepare("SELECT * FROM users WHERE phone = :phone");
    $stmt->execute(['phone' => $phone]);
    if ($stmt->rowCount() > 0) {
        header('Location: ../back-end/register.php?error=duplicate');
        exit();
    }

    // ثبت کاربر جدید
    $stmt = $conn->prepare("INSERT INTO users (username, phone, password) VALUES (:username, :phone, :password)");
    $stmt->execute([
        'username' => $username,
        'phone' => $phone,
        'password' => $password
    ]);

    header('Location: ../back-end/login.php?success=registered');
    exit();
}
?>