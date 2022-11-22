<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="dark:bg-black bg-white h-[100vh]">

    <nav class="flex flex-col  mt-14  ">
        <div class="justify-around w-screen flex" >
            <img class="dark:invert h-[50%] w-[50%] " src="../Media/PULSE__logo__1.png">
        </div>
        <div class="justify-around w-screen mt-4 divide-y dark:divide-white  flex" >
        <h2 id="date" class="dark:text-white text-black  text-lg font-thin   " ></h2>
        </div>
    </nav>
    <span class="flex items-center py-3  justify-center">
        <div class="border-t-2 dark:text-white  text-slate-300 w-64"></div>
    </span>
        <?php 
    include('footer.php')
    ?>
    </footer>
    

</body>
<script>

// This arrangement can be altered based on how we want the date's format to appear.
let date = new Date();
let day =  date.toDateString('en-US', {
    weekday: 'long',
    month: 'long'
  })
	document.getElementById("date").innerHTML =  day;
</script>
</html>