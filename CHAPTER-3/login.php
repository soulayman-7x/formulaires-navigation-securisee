<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);

    if (empty($name)) {
        echo "your name is required";
    } else {
        $_SESSION['user'] = $name;
        header("Location: dashboard.php");
        exit();
    }
}

?>

<form action="#" method="POST">
    <input type="text" name="name">
    <button type="submit" name="send">Send</button>
</form>