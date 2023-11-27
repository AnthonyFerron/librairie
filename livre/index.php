<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Présentation détaillée</title>
</head>
<body class="bg-[#04151F]">

    <div class="absolute top-0"><img class="w-screen" src="../Icons/Background.png"></div>

    <?php include('../header/index.html'); ?>

    <div class="flex justify-center items-center w-full">
        <div class="flex flex-col w-[650px] h-[985px] justify-center items-center bg-gradient-to-br from-amber-500 from-[-50%] backdrop-blur-[7px] rounded-[30px]">
            <div class="flex justify-around items-center w-[577px] h-[76px] bg-gradient-to-b from-amber-500 rounded-[30px] shadow mt-[-50px]">
                <h1 class="text-5xl text-white">Shutter Island</h1>
            </div>
            <img class="flex w-[252px] my-10 opacity-100" src="../Icons/shutterisland.jpg"/>
            <div class="flex flex-col-2">
                <img class="" src="../Icons/star.png">
            </div>
            <div class="flex text-white text-center mx-10">
                <p classs="flex text-3x1 text-white text-center">Nous sommes dans les années cinquante. Au large de Boston, sur
                un îlot nommé Shutter Island se dresse un groupe de bâtiments à 
                l'allure de forteresse. C'est un hôpital psychiatrique. Mais les 
                pensionnaires d'Ashecliffe Hospital ne sont pas des patients 
                ordinaires. Tous souffrent de graves troubles mentaux et ont commis des meurtres particulièrement horribles. Lorsque le ferry assurant la liaison avec le continent aborde ce jour-là, deux hommes en descendent : le marshal Teddy Daniels et son coéquipier Chuck Aule. Ils sont venus à la demande des autorités de la prison-hôpital, car l'une des patientes, Rachel Solando, manque à l'appel.</p>
            </div>
        </div>
    </div>

    <div class="flex flex-row w-full justify-center items-center h-[250px] mt-[50px]">
        <div class="flex flex-row w-[49%] h-full">

            <div class="flex flex-col justify-around items-center text-2xl w-[50%] h-full">
                <p class=" flex text-white">Prix : 8€65<br/><br/>Auteur : Dennis Lehane<br/><br/>Editeur : Rivage<br/><br/>Date : Septembre 2009
                    text-white </p>
            </div>

            <div class="flex flex-col justify-around items-center text-2xl  w-[50%] h-full">
                <p class=" flex text-white">Nombre de pages : 400<br/><br/>Format : 11x16.90x1.80cm<br/><br/>Poids : 0.2380 kg<br/><br/>ISBN : 2743620064</p>
            </div>

        </div>
        
        
        <div class="w-[1px] h-[250px] bg-white"></div>


        <div class="flex flex-col w-[49%] h-full justify-around items-center">

            <div class="flex justify-items-top flex-col-2 w-full h-[50%]">
                <div class="flex flex-col-2">
                    <div class="flex">
                        <img class="flex h-[70%]" src="../Icons/user.png">
                    </div>

                    <div>
                        <h2 class="flex text-white font-bold text-xl">User2569</h2>
                        <p class=" text-white">lorem lorem lorem lorem</p>
                        <p class=" text-white">lorem lorem lorem lorem</p>
                        <p class=" text-white">lorem lorem lorem lorem</p>
                        <p class=" text-white">lorem lorem lorem lorem</p>

                    </div>
                </div>
            </div>
            
            <div class="flex flex-col w-[50%] h-full justify-around items-center">

                <div class="flex justify-items-top flex-col-2 w-full h-[50%]">
                    <div class="flex flex-col-2">
                
                        <div>
                            <h2 class="flex text-white font-bold text-xl">User2569</h2>
                            <p class=" text-white">lorem lorem lorem lorem</p>
                            <p class=" text-white">lorem lorem lorem lorem</p>
                            <p class=" text-white">lorem lorem lorem lorem</p>
                            <p class=" text-white">lorem lorem lorem lorem</p>
                        </div>
                        
                        <div class="flex">
                            <img class="flex h-[70%]" src="../Icons/user.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        <?php include('../footer/index.html'); ?>

</body>
</html>