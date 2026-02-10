<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
} else {
    echo "<h1> Welcome, " . htmlspecialchars($_SESSION['user']) . " to Dashboard </h1>";
    echo "<a href='logout.php'>Logout</a>";
}