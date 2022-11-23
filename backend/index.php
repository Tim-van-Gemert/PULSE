<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}

include "host.php";
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
    <?php
    $query = "SELECT * FROM user WHERE id = :id";
    $sql = $pdo->prepare($query);
    $sql->bindParam('id', $_SESSION['user']['id']);
    $sql->execute();
    $rows = $sql->fetchAll();
    foreach ($rows as $row) {
    ?>
        <h2>welkom <?php echo $row['name']; } ?>!</h2>

        <a href="logout.php">klik</a>
</body>

</html>