<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    setcookie('user_theme', $theme, time() + (86400 * 30), "/"); 
    header('Location: index.php');
    exit;
} else {
    header('Location: preferencia.php');
    exit;
}
?>