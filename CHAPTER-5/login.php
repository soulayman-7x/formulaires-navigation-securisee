<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pass = trim($_POST['password']) ?? '';
    $name = trim($_POST['name']) ?? '';

    if (empty($name) || empty($pass)) {
        echo "<p style='color:red;'>All fields are required</p>";
    } elseif ($name === 'admin' && $pass === '1234') {
        session_regenerate_id(true);
        $_SESSION['user'] = "admin";
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<p style='color:red;'>Invalid Credentials</p>";
    }
}

?>

<form action="#" method="POST">
    <input type="text" name="name">
    <input type="password" name="password">
    <button type="submit" name="send">Send</button>
</form>