<?php
session_start();
include "host.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if ($email != "" && $password != "") {
        $query = "SELECT * FROM `user` WHERE `email`=:email AND `password`=:password";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam('email', $email, PDO::PARAM_STR);
        $stmt->bindParam('password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $rows = $stmt->fetchAll();
        foreach ($rows as $row) {
            if ($count == 1 && !empty($row)) {
                $username = $row['first_name'] . ' ' . $row['last_name'];
                $userId = $row['id'];
                $email = $row['email'];
                $age = $row['age'];
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $userId;
                $_SESSION['email'] = $email;
                $_SESSION['age'] = $age;
                header('Location: profile.php');
            } else {
                header('Location: login.php');
                echo "<script>alert('Verkeerd gebruikersnaam en/of wachtwoord!');</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welkom</h1>
    <form method="POST">
        <label for="email">email</label>
        <input type="email" name="email" placeholder="email">
        <label for="password">password</label>
        <input type="password" name="password" placeholder="password">
        <button type="submit">login</button>
    </form>
</body>
</html>