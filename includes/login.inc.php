<?php
session_start();
require_once __DIR__ . '/../back-end/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // بررسی وجود کاربر
    $stmt = $conn->prepare("SELECT * FROM users WHERE phone = :phone");
    $stmt->execute(['phone' => $phone]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // ذخیره اطلاعات کاربر در session
        $_SESSION['user'] = [
            'username' => $user['username'],
            'phone' => $user['phone']
        ];
        // هدایت به صفحه اصلی
        header('Location: ../index.html');
        exit();
    } else {
        // هدایت به صفحه ورود با خطا
        header('Location: ../back-end/login.php?error=invalid');
        exit();
    }
}
?>