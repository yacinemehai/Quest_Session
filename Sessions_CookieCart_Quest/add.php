<?php
session_start();

$cookieId = $_GET['add_to_cart'];
if (!isset($_SESSION['products'])){
    $_SESSION['products'] = [];
}

$_SESSION ['products'][$cookieId]++;
header('location: /');
?>
