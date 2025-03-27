<?php
session_start();
header('Content-Type: application/json');

if (isset($_SESSION['user'])) {
    echo json_encode([
        'loggedIn' => true,
        'username' => $_SESSION['user']['username'],
        'phone' => $_SESSION['user']['phone']
    ]);
} else {
    echo json_encode(['loggedIn' => false]);
}
?>