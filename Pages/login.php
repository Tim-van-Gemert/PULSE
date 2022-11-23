<?php
session_start();
include ("host.php");

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
                header('Location: index.php');
            } else {
                echo "<script>alert('Verkeerd gebruikersnaam en/of wachtwoord!');</script>";
            }
        }
    }
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="dark:bg-black bg-white mt-14 overflow-hidden">
    <?php include('header.php') ?>
    <h2 class="mx-5 mt-28 dark:text-white text-3xl text-black  ">Login</h2>
    <div class="bg-[#f9f3f3] mx-5 py-2 rounded-xl   dark:bg-slate-900   ">
        
    <form method="POST" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    <div class="pb-2 pt-4">
                        <input type="email" name="email" id="email" placeholder="Email" class="block w-full p-4 text-lg rounded-lg bg-white">
                    </div>
                    <div class="pb-2  pt-4">
                        <input class="block rounded-lg w-full p-4 text-lg bg-white" type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button type="submit" class="uppercase block w-full p-4 text-lg text-white dark:text-slate-900  rounded-full dark:bg-white bg-slate-900 hover:slate-600 focus:outline-none">sign in</button>
                    </div>
                    <div class="flex flex-row  justify-between gap-8 text-gray-400 mt-2 hover:underline hover:text-gray-100">
                        <a href="#">Forgot your password?</a>
                        <a href="register.php">Register</a>
                    </div>
                </form>
                </div>
    <footer>
        <?php include('footer.php') ?>
        <script src="date.js"></script>
    </footer>
</body>

</html>