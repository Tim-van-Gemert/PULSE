<?php
include 'host.php';
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
    <form method='POST'>
        <input type="text" placeholder="name" name="name">
        <label for="gender">gender</label>
        <select name="gender" id="">
            <option value="Man">Man</option>
            <option value="Vrouw">Vrouw</option>
        </select>
        <input type="text" placeholder="age" name="age">
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        <button type='submit' name='submit'>Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT COUNT(email) AS num FROM user WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':email' => $email
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $sql = "SELECT COUNT(email) AS num FROM user WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':email' => $email
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row['num'] > 0) {
            echo '<script>alert("Email bestaat al!")</script>';
        } else {
            $sql = "INSERT INTO `user` (`name`, `gender`, `age`, `email`, `password`) 
    VALUES (:name, :gender, :age, :email, :password)";
            $sql_run = $pdo->prepare($sql);
            $result = $sql_run->execute(array(
                ":name" => $name, ":gender" => $gender, ":age" => $age, ":email" => $email, ":password" => $password,
            ));
            header("Location: login.php");
        }
    }
    ?>
</body>

</html>