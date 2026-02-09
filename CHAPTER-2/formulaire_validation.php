<?php
if (isset($_POST['send'])) {
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    $errors = [];

    if (empty($name)) {
        $errors[] = "the name are required!";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Pleas, enter a valid email";
    }

    if (empty($errors)) {
        echo "<h1> Hi, $name, welcome to system! </h1>";
    }

    echo "<ul>";

    foreach($errors as $error ) {
        echo "<li>$error</li>";
    }
    echo "</ul>";


}
?>

<style>
    body {
        background-color: #0d0d0d;
        color: #ffff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: 'Courier New', Courier, monospace;
    }

    li {
        list-style: none;
        color: red;
        background-color: #ff7a7a70;
        padding: 6px;
    }

    form {
        width: 100%;
        max-width: 500px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        background-color: #1f1f1f;
        padding: 30px;
        margin-top: 100px;
        border-radius: 12px;
        box-shadow: 1px 1px 12px #f700ff;
        backdrop-filter: blur(12px);
    }

    input {
        padding: 12px 20px;
        border-radius: 30px;
        border-color: #f700ff;
        outline: none;
        background-color: #313131;
        color: #fff;
    }

    button {
        padding: 12px;
        border-radius: 30px;
        border: none;
        background: linear-gradient(120deg, #f700ff, #0077ff);
        cursor: pointer;
    }
</style>

<form action="#" method="POST">
    <label for="name">User Name :</label>
    <input type="text" id="name" value="<?php echo htmlspecialchars($name ?? '') ?>" name="username">
    <label for="email">Email :</label>
    <input type="email" id="email" value="<?php echo htmlspecialchars($email ?? '') ?>" name="email">
    <button type="submit" name="send">Send</button>
</form>