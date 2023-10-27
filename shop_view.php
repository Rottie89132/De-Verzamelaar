<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <script src="./js/winkelwagen.js"></script>
    <script src="https://kit.fontawesome.com/a4cee7c207.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="p-0 m-0 bg-red-500 ">
    <div class="fixed w-screen h-screen overflow-scroll">
        <div class="mx-8 ">
            <div class="flex justify-between py-5 pr-8 mt-3 text-xl font-extrabold text-white">
                <div class="flex gap-10 ">
                    <a class="transition-all delay-200 opacity-40 hover:opacity-60" href="./">Home</a>
                    <a class="transition-all delay-200 opacity-90 hover:opacity-90" href="./shop.php">Shop</a>
                    <a class="transition-all delay-200 opacity-40 hover:opacity-60" href="./login.html">Inloggen</a>
                </div>
                <a href="./Wagen.html" class="transition-all delay-200 opacity-90 hover:opacity-90">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
        <div class="flex gap-2 mx-8 my-6 mt-5">
            <div class="grid w-full h-full grid-cols-4 gap-4 ">
                <?=$toonItems?>
            </div>
        </div>
    </div>
</body>
</html>