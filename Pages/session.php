<?php
session_start();
if (empty($_SESSION['id'])) {
header("Location: login.php");
}
?>