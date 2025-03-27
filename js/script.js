function checkUserStatus() {
    fetch('includes/check_user.php')
        .then(response => response.json())
        .then(data => {
            if (data.loggedIn) {
                // کاربر وارد شده
                document.getElementById('loginLink').style.display = 'none';
                document.getElementById('registerLink').style.display = 'none';
                document.getElementById('userInfo').style.display = 'flex';
                document.getElementById('username').textContent = data.username; // نمایش نام کاربری
            } else {
                // کاربر وارد نشده
                document.getElementById('loginLink').style.display = 'block';
                document.getElementById('registerLink').style.display = 'block';
                document.getElementById('userInfo').style.display = 'none';
            }
        });
}

// اجرای تابع هنگام بارگذاری صفحه
window.onload = checkUserStatus;