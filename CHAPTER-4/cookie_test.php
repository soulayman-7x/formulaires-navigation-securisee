<?php 
if (isset($_POST['send'])) {
    $name = trim($_POST['username']);
    setcookie("user_name", $name, time() + 3600, "/");
    header("Location: cookie_test.php");
    exit();
}

?>

<?php if (isset($_COOKIE['user_name'])) : ?>
    <h1>Welcome back , <?php echo htmlspecialchars($_COOKIE['user_name']) ?></h1>
    <p><a href="logout_cookie.php">Do you want to delete the cookie?</a></p>

<?php else: ?>
    <form action="#" method="POST">
        <input type="text" name="username">
        <button type="submit" name="send">Send</button>
    </form>
<?php endif; ?>