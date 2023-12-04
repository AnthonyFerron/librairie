<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Présentation détaillée</title>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="52cb5553-ca36-435e-ad36-c7d03e766965";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body class="bg-[#04151F]">

    <div class="absolute top-0"><img class="w-screen" src="../../Icons/Background.png"></div>

    <?php include('../../header/index.html'); ?>

    <!-- pres livre -->

    <div class="flex justify-center items-center w-full">
        <div class="flex flex-col w-[650px] h-[985px] justify-center items-center bg-gradient-to-br from-amber-500 from-[-50%] backdrop-blur-[7px] rounded-[30px]">
            <div class="flex justify-around items-center w-[577px] h-[76px] bg-gradient-to-b from-amber-500 rounded-[30px] shadow mt-[-50px]">
                <h1 class="text-5xl text-white">Shutter Island</h1>
            </div>
            <img class="flex w-[252px] mt-10 mb-5  opacity-100" src="../../Icons/shutterisland.jpg"/>
            <div class="flex flex-row justify-center items-center mb-5 text-white text-xl">
                <img class="w-[48px]" src="../Icons/star.png">
                <p>5/5</p>
            </div>
            <div class="flex text-white text-center mx-10 text-xl mb-[-50px]">
                <p classs="flex text-white text-center">Nous sommes dans les années cinquante. Au large de Boston, sur
                un îlot nommé Shutter Island se dresse un groupe de bâtiments à 
                l'allure de forteresse. C'est un hôpital psychiatrique. Mais les 
                pensionnaires d'Ashecliffe Hospital ne sont pas des patients 
                ordinaires. Tous souffrent de graves troubles mentaux et ont commis 
                des meurtres particulièrement horribles. Lorsque le ferry assurant la 
                liaison avec le continent aborde ce jour-là, deux hommes en descendent : 
                le marshal Teddy Daniels et son coéquipier Chuck Aule. Ils sont venus à la demande 
                des autorités de la prison-hôpital, car l'une des patientes, Rachel Solando, manque à l'appel.</p>
            </div>
        </div>
    </div>

    <!-- details livres -->

    <div class="flex flex-row w-full justify-center items-center h-[250px] mt-[50px] mb-[100px]">
        <div class="flex flex-row w-[49%] h-full ml-10">

            <div class="flex flex-row justify-around items-center w-[50%] h-full mr-10">
                <div class="flex flex-col justify-left items-center text-2xl w-[50%] h-full">
                    <p class="flex text-white">Prix :<br>
                        <br>Auteur : <br>
                        <br>Editeur :<br>
                        <br>Date :
                    </p>
                </div>
                <div class="flex flex-col text-right text-2xl w-[50%] h-full text-white">
                    <p>
                        8€65<br>
                        <br>Dennis Lehane<br>
                        <br>Rivage<br>
                        <br>Septembre 2009
                    </p>
                </div>
            </div>

            <div class="flex flex-row justify-around items-center w-[50%] h-full mr-10">
                <div class="flex flex-col justify-left items-center text-2xl w-[50%] h-full">
                    <p class="flex text-white">Nombre de pages :<br>
                        <br>Format : <br>
                        <br>Poids :<br>
                        <br>ISBN :
                    </p>
                </div>
                <div class="flex flex-col text-right text-2xl w-[50%] h-full text-white">
                    <p>
                        400<br>
                        <br>11x16.90x1.80cm<br>
                        <br>0.2380 kg<br>
                        <br>2743620064
                    </p>
                </div>
            </div>
        </div>
        
        
        <div alt="barre séparation" class="w-[1px] h-[250px] bg-white"></div>

        <!-- avis -->


        <div class="flex flex-col w-[49%] h-full justify-around items-center ml-10">

            <div class="flex justify-items-top flex-col-2 w-full h-[50%]">
                <div class="flex flex-col-2">
                    <div class="flex">
                        <img class="flex h-[75px]" src="../../Icons/user.png">
                    </div>
                    <div>
                        <h2 class="flex text-white font-bold text-xl">User2569</h2>
                        <p class=" text-white">lorem lorem lorem lorem</p>
                        <p class=" text-white">lorem lorem lorem lorem</p>
                        <p class=" text-white">lorem lorem lorem lorem</p>
                        <p class=" text-white">lorem lorem lorem lorem</p>
                        <div class="flex flex-row text-white"><img class="w-[25px]" src="../../Icons/star.png"><p>5/5</p></div>

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
                            <div class="flex flex-row text-white items-center"><img class="w-[25px]" src="../../Icons/star.png"><p>5/5</p></div>
                        </div>
                        
                        <div class="flex">
                            <img class="flex h-[75px]" src="../../Icons/user.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('../../footer/index.html'); ?>

</body>
</html>