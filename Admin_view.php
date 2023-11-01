<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a4cee7c207.js" crossorigin="anonymous"></script>
    <script src="./js/actions.js"></script>
    <script type="module" src="./js/admin.js"></script>
    <title>Admin</title>
</head>
<body class="p-0 m-0 overflow-hidden bg-red-500 ">
    <div class="fixed w-screen h-screen bg-gradient-to-r from-red-500 to-red-800">
        <div class="mx-8 ">
            <div class="flex justify-between py-5 pr-8 mt-3 text-xl font-extrabold text-white">
                <div class="flex gap-10 ">
                    <a class="transition-all delay-200 opacity-40 hover:opacity-60" href="./">Home</a>
                    <a class="transition-all delay-200 opacity-40 hover:opacity-60" href="./shop.php">Shop</a>
                    <a class="transition-all delay-200 opacity-90 hover:opacity-90" href="">Admin</a>
                </div>
                <button onclick="Logout()" class="transition-all delay-200 opacity-90 hover:opacity-90">
                        <i class="fa-solid fa-power-off"></i>
                    </button>
            </div>
        </div>
        <div class="absolute z-0 w-screen h-screen ">
            <div class="grid grid-cols-3 gap-5 m-8 h-5/6">
                <div class="col-span-1 p-6 bg-white rounded-xl">
                    <form action="./server/upload.php" method="post" enctype="multipart/form-data">
                        <div class="">
                            <div class="mb-4 ">
                                <label class="block mb-1 font-bold " for="Naam">Naam</label>
                                <input class="block w-full p-2 mb-1 rounded-md outline-none appearance-none ring-2 ring-gray-300" type="text" id="Naam" name="Naam"/>
                            </div>
                            <div class="mb-4 ">
                                <label class="block mb-1 font-bold " for="Prijs">Prijs</label>
                                <input class="block w-full p-2 mb-1 rounded-md outline-none appearance-none ring-2 ring-gray-300" type="text" id="Prijs" name="Prijs"/>
                            </div>
                            <div class="mb-4 ">
                                <label class="block mb-1 font-bold " for="Vooraad">Vooraad</label>
                                <input class="block w-full p-2 mb-1 rounded-md outline-none appearance-none ring-2 ring-gray-300" type="text" id="Vooraad" name="Vooraad"/>
                            </div>
                            <div class="mb-4 ">
                                <label class="block mb-1 font-bold " for="Beschrijving">Beschrijving</label>
                                <textarea class="block w-full p-2 mb-1 rounded-md outline-none appearance-none resize-none h-44 ring-2 ring-gray-300" type="text" id="Beschrijving" name="Beschrijving"></textarea>
                                <input type="hidden" id="id"/>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-center w-full">
                                <label for="file" class="flex flex-col items-center justify-center w-full h-20 rounded-lg outline-none cursor-pointer bg-gray-50 ring-2 ring-gray-300 hover:bg-gray-100 ">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Klik om te uploaden</span></p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or GIF </p>
                                    </div>
                                    <input id="file" type="file" name="file" class="hidden" />
                                </label>
                            </div> 
                        </div>
                        <button class="p-2 px-5 mt-5 text-white bg-red-500 rounded-md " type="submit">Vestuur</button>
                        <?=$msg?> 
                    </form>
                </div>
                <div class="col-span-2 bg-[#B44035] rounded-xl p-6 grid grid-cols-3 overflow-scroll">
                    <?=$toonItems?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>