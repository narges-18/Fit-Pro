<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: ../index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="../index.html">فیت-پرو | Fit-Pro</a>
        </div>
    </nav>

    <section class="container my-5">
        <h2 class="text-center mb-4">ثبت نام</h2>
        <form action="../includes/register.inc.php" method="POST">
        <div class="mb-3">
                <label for="username" class="form-label">نام کاربری</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">شماره موبایل</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">رمز عبور</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">ثبت نام</button>
        </form>
        <p class="mt-3">قبلاً ثبت‌نام کرده‌اید؟ <a href="login.php">وارد شوید</a></p>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2023 باشگاه ورزشی. تمام حقوق محفوظ است.</p>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>