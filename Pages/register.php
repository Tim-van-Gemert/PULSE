<?php
include("host.php");
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="dark:bg-black bg-white mt-14 mb-28">
    <?php include('header.php') ?>
    <h2 class="mx-5 mt-28 dark:text-white text-3xl text-black  ">Login</h2>
    <div class="bg-[#f9f3f3] mx-5 py-2 rounded-xl   dark:bg-slate-900   ">

        <form method="POST" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
            <div class="pb-2 pt-4">
                <label name="name" class="mx-2 mt-28 dark:text-white text-1xl text-black">Name:</label>
                <input class="block rounded-lg w-full p-4 text-lg bg-white" type="text" placeholder="name" name="name">
            </div>
            <div class="pb-2  pt-4">
                <label name="gender" class="mx-2 mt-28 dark:text-white text-1xl text-black">Gender:</label>
                <select class="block rounded-lg w-full p-4 text-lg bg-white" name="gender">
                    <option value="Man">Man</option>
                    <option value="Vrouw">Vrouw</option>
                </select>
            </div>
            <div class="pb-2  pt-4">
                <label name="age" class="mx-2 mt-28 dark:text-white text-1xl text-black">Age:</label>
                <input class="block rounded-lg w-full p-4 text-lg bg-white" type="number" placeholder="age" name="age">
            </div>
            <div class="pb-2  pt-4">
                <label name="email" class="mx-2 mt-28 dark:text-white text-1xl text-black">Email:</label>
                <input class="block rounded-lg w-full p-4 text-lg bg-white" type="email" placeholder="email" name="email">
            </div>
            <div class="pb-2  pt-4">
                <label name="password" class="mx-2 mt-28 dark:text-white text-1xl text-black">Password:</label>
                <input class="block rounded-lg w-full p-4 text-lg bg-white" type="password" placeholder="password" name="password">
                <div class="px-4 pb-2 pt-4">
                    <button type="register" name="submit" class="uppercase block w-full p-4 text-lg text-white dark:text-slate-900  rounded-full dark:bg-white bg-slate-900 hover:slate-600 focus:outline-none">register</button>
                </div>
                <div class="flex flex-row  justify-between gap-8 text-gray-400 mt-2 hover:underline hover:text-gray-100">
                    <p class="dark:text-white text-1xl text-black">got a aucount?</p>
                    <a href="login.php">Login</a>
                </div>
        </form>
    </div>
    <footer>
        <?php include('footer.php') ?>
        <script src="date.js"></script>
    </footer>
    <div>
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
    </div>
</body>

</html>

<?php
ob_end_flush();
?>