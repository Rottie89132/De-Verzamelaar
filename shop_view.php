<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="p-0 m-0 bg-red-500 ">
    <div class="fixed w-screen h-screen overflow-scroll">
        <div class="fixed mx-8 ">
            <div class="flex justify-between w-full py-5 pr-8 mt-3 text-xl font-extrabold text-white bg-red-500 bg-opacity-50 backdrop-blur-sm">
                <div class="flex gap-10 ">
                    <a class="transition-all delay-200 opacity-40 hover:opacity-60" href="./">Home</a>
                    <a class="transition-all delay-200 opacity-90 hover:opacity-90 " href="./shop.php">Shop</a>
                    <a class="transition-all delay-200 opacity-40 hover:opacity-60" href="./login.html">Inloggen</a>
                </div>
            </div>
        </div>
        <div class="flex gap-2 mx-8 my-6 mt-32 ">
            <div class="grid w-full h-full grid-cols-4 gap-4 ">
                <?=$toonItems?>
            </div>
        </div>
    </div>
</body>
</html>