<?php
$host = 'localhost'; // هاست دیتابیس
$dbname = 'gym_db'; // نام دیتابیس
$username = 'root'; // نام کاربری دیتابیس
$password = ''; // رمز عبور دیتابیس

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("اتصال به دیتابیس ناموفق بود: " . $e->getMessage());
}
?>