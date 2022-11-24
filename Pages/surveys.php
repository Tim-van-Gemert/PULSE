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

<body class="dark:bg-black bg-white mt-2 overflow-hidden px-5  flex justify-center flex-col">
    <?php include('header.php') ?>
        <div class="rounded-lg w-55 h-64 bg-slate-100 dark:bg-slate-900">
            <h5 class="text-2xl font-bold font-mono pt-3 pl-3">RPE Survey</h5>
            <p class="pt-3 pl-3">Let us know how your workout went.</p>

            <a href="rpe-survey.php" class="w-32 h-14">
                <div class="flex justify-center items-center ml-24 mt-5 w-36 h-14 bg-black rounded-xl">
                    <input type="image" class="w-11 h-11" src="../Media/check-icon.png">
                </div>
            </a>
            <div class="pt-4 pl-3">
                <p class="font-bold dark:text-white text-slate-700">Duration: <span class="font-normal">30/40 seconds</span></p>
                <p class="font-bold dark:text-white text-slate-700">Regularity: <span class="font-normal">after each training session</span></p>
                <p class="font-bold dark:text-white text-slate-700">Survey reminder notification: <span class="font-normal">ON</span></p>
            </div>
        </div>
        <div class=" rounded-lg w-55 h-64 bg-slate-100 dark:bg-slate-900  mt-6">
            <h5 class="text-2xl font-bold font-mono pt-3 pl-3">Mental Health Survey</h5>
            <p class="pt-3 pl-3">Let us know how you have been feeling <br> lately.</p>
            <a href="mental-health-survey.php" class="w-32 h-14">
                <div class="flex justify-center items-center ml-24 mt-0 w-36 h-14 bg-black rounded-xl">
                    <input type="button" value="Get started" class="text-white font-serif text-xl font-bold">
                </div>
            </a>
            <div class="pt-4 pl-3">
                <p class="font-bold dark:text-white text-slate-700">Duration: <span class="font-normal">30/40 seconds</span></p>
                <p class="font-bold dark:text-white text-slate-700">Regularity: <span class="font-normal">after each training session</span></p>
                <p class="font-bold dark:text-white text-slate-700">Survey reminder notification: <span class="font-normal">ON</span></p>
            </div>
        </div>
    </div>

    <?php
    include('footer.php')
    ?>
    </footer>
</body>

</html>