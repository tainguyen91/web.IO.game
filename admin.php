<?php


echo "code cho trang admin se nam o day neu nhu chua login no bat buot chuyen vao trang login.php de login";
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area!";
} else {
    echo "Please log in first to see this page.";
    header("Location: login.php");
    exit;
}
?>