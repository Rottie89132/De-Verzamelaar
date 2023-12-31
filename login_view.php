<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./js/login.js"></script>
    <title>Login</title>
</head>
<body class="p-0 m-0 overflow-hidden bg-red-500 ">
    <div class="fixed w-screen h-screen bg-gradient-to-r from-red-500 to-red-800">
        <div class="mx-8 ">
            <div class="flex justify-between py-5 pr-8 mt-3 text-xl font-extrabold text-white">
                <div class="flex gap-10 ">
                    <a class="transition-all delay-200 opacity-40 hover:opacity-60" href="./">Home</a>
                    <a class="transition-all delay-200 opacity-40 hover:opacity-60" href="./shop.php">Shop</a>
                    <a class="transition-all delay-200 opacity-90 hover:opacity-90" href="./login.php">Inloggen</a>
                </div>
            </div>
        </div>
        <div class="absolute z-0 flex items-center justify-center w-screen h-screen">
            <form class="p-6 mx-5 -mt-20 text-black bg-white rounded-xl">
                <h1 class="text-3xl font-bold ">Login</h1>
                <p class="max-w-sm mb-6 opacity-80">Graag je gegevens invoeren om toegang te verkijgen Deze gegevens worden veilig verstuurd</p>
                <label class="block mb-1 font-bold " for="PassCode">PassCode</label>
                <input class="block w-full p-2 mb-1 rounded-md outline-none appearance-none ring-2 ring-gray-300" type="password" id="PassCode" value="12345678" name="PassCode"/>
                <span id="Error" class="block mb-4 font-semibold text-red-600 "></span>
                <button class="p-2 px-5 text-white bg-red-500 rounded-md " type="submit">Vestuur</button>
            </form>
        </div>
    </div>
</body>
</html>