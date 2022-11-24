<?php
session_start();
if (empty($_SESSION['id'])) {
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="dark:bg-black">
    <span class="sticky top-0 z-50 bg-white" >
        <img src="../Media/iPhone 13.png" class="w12 bg-white dark:bg-black">
    </span>
    <span class="flex px-10 pt-8 pb-2 items-center justify-between ">
        <div>
            <h1 class="text-4xl font-extrabold leading-8 dark:text-white">Dave<br>Mason</h1>
        </div>
        <div class="items-center ">
            <img src="../Media/picprofile-round-1.png"  onclick="location.href='./usersettings.php'" class="">
        </div>
    </span>

    <span class="flex items-center py-3  justify-center">
        <div class="border-t-2 text-slate-300 w-64"></div>
    </span>

    <span class="flex px-6 py-3 items-center mx-5 justify-between rounded-lg ">
        <div>
            <h4 class=" font-bold text-center leading-4 dark:text-white">TRACK</h4>
            <h5 class=" font-bold text-center text-sm text-slate-500 leading-3 ">Muscles/Nerves activity<h5>
        </div>
        <div>
            <h4 class="font-bold text-center leading-4 dark:text-white">WORK CAPACITY</h4>
            <h5 class="font-bold text-center text-sm text-slate-500 leading-3 "> Acceptable: 92%</h5>
        </div>
    </span>
    
    <span class="flex pl-10 pr-5 my-10 mx-5  items-center justify-between rounded-lg ">
        <div>
            <h4 class="font-bold leading-5 text-xl mb-1 dark:text-white" >Work <br> Capacity</h4>
            <h5 class=" w-28 font-bold  text-sm text-slate-500 leading-3">This is a fake text with fake data and stuff</h5>
        </div>

        <div>
            <img src="../Media/Charts/chart1.png" class="myDonuts  w-36 h-36">
            <img src="../Media/Charts/PULSE_index_1.png" class="myDonuts hidden w-36 h-36">
            <img src="../Media/Charts/donut.png" class="myDonuts hidden w-36 h-36 ">
            <div class="items-center justify-center flex pt-6">
                <span onclick="currentDonut(1)" id="firstDots" class="dotDonuts bg-zinc-800 rounded-full w-2 h-2 mx-2 "></span>
                <span onclick="currentDonut(2)" class="dotDonuts bg-zinc-800 rounded-full w-2 h-2 mx-2"></span>
                <span onclick="currentDonut(3)" class="dotDonuts bg-zinc-800 rounded-full w-2 h-2 mx-2"></span>
            </div>
        </div>
        
    </span>
    
    <span class="flex pl-10 pr-5 my-10 mx-5 items-center justify-between rounded-lg">
        <div class="">
            <h4 class=" font-bold leading-5 text-xl mb-1 dark:text-white" >PULSE <br> Index</h4>
            <h5 class=" w-28 font-bold  text-sm text-slate-500 leading-3 ">Muscles/Nerves <br> activity and fake <br> data and stuff</h5>
        </div>
        <div>
            <img src="../Media/Charts/column_chart.png" class=" myColumns w-36 h-36">
            <img src="../Media/Charts/column_chart_2.png" class=" myColumns hidden w-36 h-36">
            <div class="items-center justify-center flex pt-6">
                <span onclick="currentColumns(1)" id="firstDots" class="dotColumns bg-zinc-800 rounded-full w-2 h-2 mx-2"></span>
                <span onclick="currentColumns(2)" class="dotColumns bg-zinc-800 rounded-full w-2 h-2 mx-2"></span>
            </div>
        </div>
    </span>

    <span class="flex pl-10 pr-5 my-10 mx-5  pb-20 items-center justify-between rounded-lg">
        <div class="">
            <h4 class=" font-bold leading-5 text-xl mb-1 dark:text-white" >Fatigue <br> Score</h4>
            <h5 class=" w-32 font-bold  text-sm text-[#848484] leading-3 ">Score based on <br> surveys and health</h5>

        </div>
            
        <div class="flex flex-col">
            <div class="bg-[#f9f3f3] dark:bg-slate-900  mx-5 px-4 py-5  my-5 justify-center rounded-xl ">

                <div class="myScores">
                    <h5 class=" w-32 font-bold  text-sm text-[#848484] leading-3 text-center ">24/11/2022</h5>
                    <h4 class=" text-3xl w-46 font-bold dark:text-white text-center ">19.17</h4>
                </div>
                <div class="myScores">
                    <h5 class=" w-32 font-bold  text-sm text-[#848484] leading-3 text-center ">23/11/2022</h5>
                    <h4 class=" text-3xl w-46 font-bold dark:text-white text-center ">19.03</h4>
                </div>
                <div class="myScores">
                    <h5 class=" w-32 font-bold  text-sm text-[#848484] leading-3 text-center ">22/11/2022</h5>
                    <h4 class=" text-3xl w-46 font-bold dark:text-white text-center ">19.56</h4>
                </div>

            </div>
            
            <div class="items-center justify-center flex ">
                    <span onclick="currentScore(1)" id="firstDots" class=" dotScores bg-zinc-800 rounded-full w-2 h-2 mx-2"></span>
                    <span onclick="currentScore(2)" class="dotScores bg-zinc-800 rounded-full w-2 h-2 mx-2"></span>
                    <span onclick="currentScore(3)" class="dotScores bg-zinc-800 rounded-full w-2 h-2 mx-2"></span>
            </div>
        </div>
    </span>


    
    <?php 
    include('footer.php')
    ?>
    <script src="slider.js"></script>
</body>
</html>
