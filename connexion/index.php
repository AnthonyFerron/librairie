<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../tailwind.config.js"></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="52cb5553-ca36-435e-ad36-c7d03e766965";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <title>Connexion</title>
    <link rel="icon" href="../Icons/plume.png">
</head>


<body class="bg-[url('../Icons/Background.png')] bg-cover bg-[#04151F]">

  <?php include('../header/index.html'); ?>

  <div class="flex justify-center mb-[8%]">
    <div class="rounded-[30px] bg-[linear-gradient(132deg,_rgba(241,_138,_0,_0.70)_26.44%,_rgba(181,_181,_181,_0.20)_61.92%)] [box-shadow:0px_4px_24px_-1px_rgba(0,_0,_0,_0.20)] backdrop-filter backdrop-blur-[10px]  flex  flex-col mt-[8%] w-[25%] h-[2%] px-6 py-12 lg:px-8">
        <div class=" flex  flex-col  sm:mx-auto sm:w-full sm:max-w-sm ">
          <img class="mx-auto h-[55%] w-[30%]" src="../Icons/Avatar.png" alt="Your Company">
          <div>
            <label for="name" class=" text-sm flex  justify-center font-medium leading-6 text-white">
            </label>
            <div class="mt-4 flex justify-center text-center font-[Roboto] ">
              <input class="text-center font-[Roboto] bg-blur rounded-md  border-[2px] border-[rgba(254,145,0,0.70)] "  id="email" name="email" type="email" autocomplete="email" required placeholder="Nom Prénom" >
            </div>
          </div>
        </div>
      
        <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm ">

            

          <form class="space-y-6" action="#" method="POST">
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-white"> 
              </label>
              <div class="mt-2">
                <input  id="email" name="email" type="email" autocomplete="email" required placeholder="Adresse email" class="sal font-[Roboto] flex text-center rounded-[8px] border-[2px]
                border-[rgba(254,145,0,070)] w-full py-1.5 text-gray-900 shadow-sm  placeholder:text-gray-400  sm:text-sm sm:leading-6 ">
              </div>
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-white"></label>
                <div class="text-sm">
                  <a href="#" class="font-semibold text-white hover:text-indigo-500  font-[Roboto]">Forgot password?</a>
                </div>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required placeholder="Mot de passe" class="sal text-center font-[Roboto] border-[2px]  border-[rgba(254,145,0,0.7)] block  w-full rounded-md  py-1.5 text-gray-900 shadow-sm placeholder:text-gray-400 sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div class="mt-2"> 
              <button type="submit" class="button flex w-full justify-center px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm 
              rounded-[50px] font-[Roboto] bg-[linear-gradient(99deg,_#F18A00_-17.03%,_rgba(217,_217,_217,_0.00)_108.57%)]  hover:translate-y-1
             ">Connexion</button>
            </div>
          </form>
      
          <p class="mt-5 font-[Roboto] text-center text-sm text-white">
            D&eacute;j&agrave; membre ?
            <a href="../connexion/" class="font-semibold leading-6 text-orange text-[rgba(254,145,0,0.70)] hover:text-indigo-500 font-[Roboto]">Connecte toi directement ici</a>
          </p>
        </div>
      </div>
    </div> 
  </div>
  <?php include('../footer/index.html'); ?>
</body>

<html>