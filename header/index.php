<nav id="mobilemenu">

    <div class="parent">
        <label for="toggle">☰</label>
        <input type="checkbox" id="toggle" class="label">
        <div class="div1"> 
        <a href="../index.html">Accueil</a>
        <a href="#">Évenements</a>
        <a href="../pres_membres/index.html">Les Membres</a>
        <a href="../Souvenirs/index.html">Souvenirs</a>
        <a href="../contact/index.php">Contact</a> 
        </div>
        
    
        <div class="div2">          
        </div>
        <div class="div3">
        <img class="logo" src="../icons/logo.png">
        </div>
    </div>
    
</nav>
    
    <script>
    document.querySelector("#toggle").onclick = function() {
    document.querySelector(".div3").style.display=(window.getComputedStyle(document.querySelector('.div3')).display=='none') ? "flex" : "none";}
    </script>
<style>