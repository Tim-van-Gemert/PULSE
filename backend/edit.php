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
    <div>
        <?php
        $query = "SELECT * FROM user WHERE id = :id";
        $sql = $pdo->prepare($query);
        $sql->bindParam('id', $_SESSION['id']);
        $sql->execute();
        $rows = $sql->fetchAll();
        foreach ($rows as $row) {
        ?>
            <h2>welkom <?php echo $row['name']; ?></h2>
    </div>
    <form method="POST">
        <label for="name">name</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <br>
        <label for="gender">gender</label>
        <select name="gender" value="<?php echo $row['gender']; ?>">
            <option value="Man">Man</option>
            <option value="Vrouw">Vrouw</option>
        </select>
        <br>
        <label for="age">age</label>
        <input type="number" name="age" value="<?php echo $row['age']; ?>">
        <br>
        <label for="email">email</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" value="<?php echo $row['password'];
                                                    } ?>">
        <br>
        <input type="submit" name="edit">
    </form>
    <div>
        <?php
        if (isset($_POST['edit'])) {
            $id = $_SESSION['id'];
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            var_dump($id);
            $pdoQuery = "UPDATE user SET name=:name, gender=:gender, age=:age, email=:email, password=:password WHERE id=:id";
            $pdoQuery_run = $pdo->prepare($pdoQuery);
            $pdoQuery_exec = $pdoQuery_run->execute(array(":name" => $name, ":gender" => $gender, ":age" => $age, ":email" => $email, ":password" => $password, ":id" => $id));

            var_dump($pdoQuery_exec);

            if ($pdoQuery_exec) {
                echo 'Data Updated';
                header('Location: profile.php');
            } else {
                echo 'ERROR Data Not Updated';
            }
        }
        ?>
    </div>

</body>

</html>