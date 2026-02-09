<?php 
if (isset($_COOKIE['theme'])) {
    echo "Your selected theme is " . htmlspecialchars($_COOKIE['theme']);
} else {
    echo "No theme selected, using default light them";
}
?>