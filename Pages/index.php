<?php
session_start();
if (empty($_SESSION['user'])) {
    header("Location: login.php");
} ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="../Media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../Media/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Media/favicon/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
</head>

<body class="dark:bg-black bg-white mt-14 overflow-hidden">

    <nav class="flex flex-col ">
        <div class="justify-around w-screen flex">
            <img class="dark:invert h-[50%] w-[50%] " src="../Media/PULSE__logo__1.png">
        </div>
        <div class="justify-around w-screen mt-4 divide-y dark:divide-white  flex">
            <h2 id="date" class="dark:text-white text-black  text-lg font-thin   "></h2>
        </div>
    </nav>
    <span class="flex items-center py-3  justify-center">
        <div class="border-t-2 dark:text-white  text-slate-300 w-64"></div>
    </span>
    <h2 class="mx-5 mt-1  dark:text-white text-3xl text-black  ">Quick stats</h2>
    <div class="bg-[#f9f3f3] mx-5 py-2 mt-4 rounded-xl   dark:bg-slate-900   ">
        <div class="ml-5 flex flex-row  gap-6">
            <div>
                <h2 class="dark:text-white text-xl  text-black">Over reaching score</h2>
                <a class=" text-[#848484] dark:text-transparent dark:bg-clip-text text-2xl  dark:bg-gradient-to-r dark:from-yellow-400 dark:to-pink-600"> 55.8 </a>
            </div>
            <div>
                <h3 class="dark:text-white text-xl text-black">Rest needs</h3>
                <a class="text-[#848484] dark:text-transparent dark:bg-clip-text text-2xl  dark:bg-gradient-to-r dark:from-yellow-400 dark:to-pink-600"> 2-3 days </a>
            </div>
        </div>
    </div>
    <h2 class=" mx-5 mt-2 dark:text-white text-3xl text-black ">To-do</h2>
    <div class=" bg-[#f9f3f3] mx-5 px-4 py-2 mt-4 rounded-xl flex flex-col justify-evenly dark:bg-slate-900 ">
        <p class=" text-base dark:text-white ">You have attained high levels of over-reaching. Your coach suggests 2-3 days off to let your body & mind recover. Check out the full report for a detailed view.</p>
        <div class=" flex flex-col justify-around mt-3 bg-slate-900 pt-2 pb-1 px-3 rounded-lg">
            <a class="flex flex-row text-white text-sm dark:text-transparent dark:bg-clip-text  dark:bg-gradient-to-r dark:from-yellow-400 dark:to-pink-600 "><img class="w-7 mr-2 -mt-1 " src="../Media/circle.grid.cross.fill.svg"> Complete Mental Health Survey </a>
        </div>
    </div>
    <h2 class="mx-5 mt-2 dark:text-white text-3xl text-black  ">Workouts</h2>
    <div class="bg-[#f9f3f3]  dark:text-white mx-5 px-4 py-2 mt-4 rounded-xl dark:bg-slate-900">
        <p>
            <strong>Sport:</strong> Strenght Training, Fitness & HIIT
            <strong>Level:</strong> Semi-professional
        </p>
        <div class="flex flex-row justify-center mt-3 gap-2 h-[10vh] ">
            <div class="bg-slate-600 dark:bg-transparent w-[30%] flex flex-col justify-evenly text-center   text-white  rounded-xl">
                <h2 id="dateyesterdaynum"></h2>
                <h2 id="dateyesterday"></h2>
            </div>
            <div class="bg-slate-900  dark:bg-gradient-to-r dark:from-yellow-400 dark:to-pink-600 w-[30%]  flex flex-col justify-evenly text-center   text-white  rounded-xl">
                <h2 id="datetodaynum"></h2>
                <h2 id="datetoday"></h2>
            </div>
            <div class="bg-slate-600 dark:bg-transparent w-[30%]  flex flex-col justify-evenly text-center   text-white  rounded-xl ">
                <h2 id="datetomorrownum"></h2>
                <h2 id="datetomorrow"></h2>

            </div>
        </div>
    </div>


    <footer>
        <?php
        include('footer.php')
        ?>
    </footer>


</body>


</html>