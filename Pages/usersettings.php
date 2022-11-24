<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="dark:bg-black bg-white">
    <span class="sticky top-0 z-50 bg-white dark:bg-black" >
        <img src="../Media/iPhone 13.png" class="w12 bg-white dark:bg-black ">
    </span>
    <span class="flex px-10 pt-8 pb-2 items-center justify-between ">
        <div>
            <h1 class="text-4xl font-extrabold leading-8 dark:text-white">User<br>Settings</h1>
        </div>
        <div class="items-end flex flex-col">
            <img src="../Media/picprofile-round-1.png" class="">
            <h4 class="  w-28 font-bold pr-2 text-end text-sm text-[#848484] leading-3 pt-3">Change</h4>
        </div>
    </span>

    <div class="bg-[#f9f3f3] dark:bg-slate-900 mx-5 px-4 py-5 pt-2  mt-7 rounded-xl ">
            <h2 class="   font-bold text-xl text-black  dark:text-white">User info</h2>
            <h4 class=" font-bold text-sm text-[#848484]  pt-1">Name: Dave Mason</h4>
            <h4 class=" font-bold text-sm text-[#848484] pt-1">Email: Dave@Mason.com</h4>
            <h4 class=" font-bold text-sm text-[#848484] pt-1">Phone: 061283927</h4>
            <div class=" flex justify-between">
            <h4 class=" w-36 font-bold text-sm text-[#848484] pt-1">Password: &#x25cf; &#x25cf; &#x25cf; &#x25cf; &#x25cf; &#x25cf;</h4>
            <h2 class="  w-36 font-bold  text-black text-center text-white bg-black content-center w-24 rounded-xl justify-center dark:text-white dark:bg-black">Edit</h2>
            </div>
    </div>

    <div class="bg-[#f9f3f3]  dark:bg-slate-900 mx-5 px-4 py-5 pt-2 my-5 rounded-xl ">
            <h2 class="   font-bold text-xl text-black dark:text-white ">App Settings</h2>
            <h4 class=" font-bold text-sm text-[#848484]  pt-1">Darkmode: Off</h4>
            <h4 class=" font-bold text-sm text-[#848484] pt-1">Data saving: On</h4>
            <h4 class=" font-bold text-sm text-[#848484] pt-1">Notifications: On</h4>
            <div class=" flex justify-between">
            <h4 class=" font-bold text-sm text-[#848484] pt-1">Language: English</h4>
            <h2 class="  w-36 font-bold  text-black text-center text-white bg-black content-center w-24 rounded-xl justify-center dark:text-white dark:bg-black">Edit</h2>
            </div>
    </div>

        <div class="bg-[#f9f3f3] dark:bg-slate-900  mx-5 px-4 py-5 pt-2 my-5  rounded-xl ">
            <h2 class="   font-bold text-xl text-black dark:text-white ">More Information</h2>
            <h4 class=" font-bold text-sm text-[#848484] pt-1">Help and Information </h4>
            <h4 class=" font-bold text-sm text-[#848484] pt-1">Privacy policy </h4>
            <h4 class=" font-bold text-sm text-[#848484] pt-1">Terms of use </h4>
            <div class=" flex justify-between">
            <h4 class=" w-46 font-bold text-sm text-[#848484] pt-1">About this application</h4>
            <h2 class="  w-36 font-bold  text-black text-center text-white bg-black content-center w-24 rounded-xl justify-center dark:text-white dark:bg-black">View</h2>
            </div>
    </div>

    <?php 
    include('footer.php')
    ?>
    <script src="slider.js"></script>
</body>
</html>
