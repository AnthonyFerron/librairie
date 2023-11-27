<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[url('../Icons/Background.png')] bg-cover bg-[#04151F]">

    <?php include('../header/index.html');?>
    
    <div class="flex justify-center items-center mt-[7%]">
        <div class="flex flex-row justify-around items-center w-[1250px] h-[375px] bg-gradient-to-br from-amber-500 rounded-[30px] shadow backdrop-blur ">
            <div class="">
                <div class="flex justify-center items-center rounded-full bg-gradient-to-br from-white to-[#F18A00] w-[275px] h-[275px]"><img src="../Icons/vinz.png"></div>
                <h1 class="text-center text-white text-3xl">Vincent Cotrez</h1>
            </div>
            <div class="">
                <div class="flex justify-center items-center rounded-full bg-gradient-to-br from-white to-[#F18A00] w-[275px] h-[275px]"><img src="../Icons/antho.png"></div>
                <h1 class="text-center text-white text-3xl">Anthony Ferron</h1>
            </div>
            <div class="">
                <div class="flex justify-center items-center rounded-full bg-gradient-to-br from-white to-[#F18A00] w-[275px] h-[275px]"><img src="../Icons/haris.png"></div>
                <h1 class="text-center text-white text-3xl">Haris Benlamri</h1>
            </div>

        </div>
    </div>
    <div class="absolute bottom-0 w-[100%]">  
        <?php include('../footer/index.html'); ?>
    </div>  
</body>
</html>