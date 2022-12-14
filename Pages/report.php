<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="manifest" href="site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="dark:bg-black mt-2">
    <?php include('header.php') ?>
    <span class="flex px-10 pb-2 items-center -mt-5 justify-between ">
        <div>
            <h1 class="text-4xl font-extrabold leading-8 dark:text-white">Dave<br>Mason</h1>
        </div>
        <div class="items-center ">
            <img src="../Media/picprofile-round-1.png" class="">
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
    
    <span class="flex pl-10 pr-5 my-10 mx-5 py-6  items-center justify-between rounded-lg">
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
    <?php 
    include('footer.php')
    ?>
    <script src="slider.js"></script>
</body>
</html>
