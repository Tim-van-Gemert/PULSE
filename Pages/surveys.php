<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surveys</title>
    <link rel="manifest" href="site.webmanifest">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="date.js" defer></script>
</head>

<body class="dark:bg-black dark:text-white bg-white overflow-hidden flex justify-center flex-col">
    <?php include('header.php') ?>
    <h2 class=" mx-5 mt-2 dark:text-white text-3xl text-black ">RPE Survey</h2>
    <div class=" bg-[#f9f3f3] mx-5 px-4 py-2 mt-4 rounded-xl flex flex-col justify-evenly dark:bg-slate-900 ">
        <p class=" text-base dark:text-white ">You have attained high levels of over-reaching. Your coach suggests 2-3 days off to let your body & mind recover. Check out the full report for a detailed view.</p>
        <div class=" flex flex-col justify-around mt-3 bg-slate-900 pt-2 pb-1 px-3 rounded-lg">
            <a class="text-lg text-white font-bold text-center   " >
            ✅ Finished: 4 hours ago!
            </a>
        </div>
    </div>
    <h2 class=" mx-5 mt-2 dark:text-white text-3xl text-black ">Mental Health Survey</h2>
    <div class=" bg-[#f9f3f3] mx-5 px-4 py-2 mt-4 rounded-xl flex flex-col justify-evenly dark:bg-slate-900 ">
        <p class=" text-base dark:text-white ">You have attained high levels of over-reaching. Your coach suggests 2-3 days off to let your body & mind recover. Check out the full report for a detailed view.</p>
        <div class=" flex flex-col justify-around mt-3 bg-slate-900 pt-2 pb-1 px-3 rounded-lg">
            <a href="surveys.php"  class="flex flex-row text-white text-sm dark:text-transparent dark:bg-clip-text  dark:bg-gradient-to-r dark:from-yellow-400 dark:to-pink-600 "><img class="w-7 mr-2 -mt-1 " src="../Media/circle.grid.cross.fill.svg"> Complete Mental Health Survey </a>
        </div>
    </div>
    <h2 class=" mx-5 mt-16 dark:text-white text-3xl text-black text-center ">Don't forget to breathe today!🧘‍♂️</h2>

    <?php
    include('footer.php')
    ?>
</body>

</html>