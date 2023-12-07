<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pr&eacute;sentation OP</title>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="52cb5553-ca36-435e-ad36-c7d03e766965";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body class="bg-[#04151F]">

    <div class="absolute top-0 z-[-10]"><img class="w-screen" src="../../Icons/Background.png"></div>

    <?php include('../../header/index.html'); ?>

    <!-- pres livre -->

    <div class="flex justify-center items-center w-full" >
        <div class="flex flex-col w-[650px] h-[800px] justify-center items-center bg-gradient-to-br from-amber-500 from-[-50%] backdrop-blur-[7px] rounded-[30px]">
            <div class="flex justify-around items-center w-[577px] h-[76px] bg-gradient-to-b from-amber-500 rounded-[30px] shadow">
                <h1 class="text-3xl text-white font-[Oswald]">One Piece-T01</h1>
            </div>
            <img class="flex w-[252px] mt-10 mb-5  opacity-100" src="../../Icons/couvertures/one-piece-tome-1.jpg"/>
            <div class="flex flex-row justify-center items-center mb-5 text-white text-xl">
                <img class="w-[48px]" src="../../Icons/star.png">
                <p>5/5</p>
            </div>
            <div class="flex text-white text-center mx-10 text-xl mb-[-50px] font-[Roboto]">
                <p classs="flex text-white text-center">Tout le monde a peur des pirates... sauf Luffy, qui r&ecirc;ve d'en 
                    devenir un ! L'adolescent impr&eacute;visible voit m&ecirc;me les choses en 
                    grand : il veut devenir le plus fort de tous, le seigneur des 
                    pirates. Pour y arriver, il lui doit trouver un tr&ecirc;sor l&ecirc;gendaire, le 
                    One Piece. Mais si ce n'&eacute;tait qu'une l&ecirc;gende ?
                </p>
            </div>
        </div>
    </div>

    <!-- details livres -->

    <div class="flex flex-row w-full justify-center items-center h-[250px] mt-[50px] mb-[100px] font-[Roboto]">
        <div class="flex flex-row w-[49%] h-full ml-10">

            <div class="flex flex-row justify-around items-center w-[50%] h-full mr-10">
                <div class="flex flex-col justify-left items-center text-2xl w-[50%] h-full">
                    <p class="text-white">Prix :<br>
                        <br>Auteur : <br>
                        <br>Editeur :<br>
                        <br>Date :
                    </p>
                </div>
                <div class="flex flex-col text-right text-2xl w-[50%] h-full text-white">
                    <p >
                        8€65<br>
                        <br>Eiichirō Oda <br>
                        <br>SHUEISHA<br>
                        <br>1997
                    </p>
                </div>
            </div>

            <div class="flex flex-row justify-around items-center w-[50%] h-full mr-10">
                <div class="flex flex-col justify-left items-center text-2xl w-[50%] h-full">
                    <p class="text-white">Nombre de pages :<br>
                        <br>Format : <br>
                        <br>Poids :<br>
                        <br>ISBN :
                    </p>
                </div>
                <div class="flex flex-col text-right text-2xl w-[50%] h-full text-white">
                    <p>
                        207<br>
                        <br>28 x 12 x 1,4 cm<br>
                        <br>0,14 kg<br>
                        <br>4088725093
                    </p>
                </div>
            </div>
        </div>
        
        
        <div alt="barre séparation" class="w-[1px] h-[250px] bg-white"></div>

        <!-- avis -->


        <div class="flex flex-col w-[49%] h-full justify-around items-center ml-10">

            <div class="flex justify-items-top  flex-col-2 w-full h-[50%]">
                <div class="flex flex-col-2">
                    <div class="flex">
                        <img class="flex h-[75px] w-[145px]" src="../../Icons/user.png">
                    </div>
                    <div>
                        <h2 class="flex text-white  font-bold text-xl">User2569</h2>
                        <p class="text-justify text-white w-[50%] text-lg">"Le Tome 1 de One Piece" est une entr&eacute;e captivante dans cette saga &eacute;pique. L'univers fascinant et les personnages dynamiques promettent une aventure palpitante. 
                            Un d&eacute;but prometteur pour les amateurs d'histoires captivantes."</p>
                        <div class="flex flex-row text-white"><img class="w-[25px]" src="../../Icons/star.png"><p>5/5</p></div>

                    </div>
                </div>
            </div>
            
            <div class="flex flex-col w-[50%] h-full justify-around items-center">

                <div class="flex justify-items-top max-w-6 flex-col-2 w-full h-[50%] ml-[250px]">
                    <div class="flex flex-col-2">
                
                        <div>
                            <h2 class="flex text-white font-bold text-xl">User2569</h2>
                            <p class="text-justify text-white text-lg">"Le Tome 1 de One Piece" commence l'aventure de mani&egrave;re captivante. L'univers, les personnages et les 
                                illustrations promettent une lecture passionnante pour les amateurs d'aventures palpitantes."</p>
                            <div class="flex flex-row text-white items-center"><img class="w-[25px]" src="../../Icons/star.png"><p>5/5</p></div>
                        </div>
                        
                        <div class="w-[60%] h-[75px]">
                            <img class="h-[75px]" src="../../Icons/user.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('../../footer/index.html'); ?>

</body>
</html>