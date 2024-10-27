<?php
session_start();

$username = 'tailz';
$password = 'doxxed_online';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['loggedin'] = true;
        header('Location: pastes.php');
        exit;
    } else {
        echo "<script>alert('Invalid credentials!'); window.location.href='index.php';</script>";
    }
}
?>
