<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/index.css">
    <script type="text/javascript" src="scripts/index.js"></script>
    <script src="https://kit.fontawesome.com/e81b0518e0.js" crossorigin="anonymous"></script>
    <title>HorseDico-Accueil</title>
</head>
<body>
<div>
    <nav class="navbar" role="navigation">
        <ul class="navmenu">
            <div class="logodiv">
                <img class="logo" src="images/logo.png" alt="">
            </div>
            <div class="dropdown">
                <button onclick="dropdownNav()" id="dropbtn"><i class="fas fa-bars"></i></button>
            </div>
            <div class="drop">
                <li><a class="product-dropbtn" href="pages/races.php?type=all">Races <i class="fa-solid fa-angle-down"></i></a></li>
                <div class="dropdown-Product">
                    <a href="pages/races.php?type=saut">Saut</a>
                    <a href="pages/races.php?type=dressage">Dressage</a>
                    <a href="pages/races.php?type=trait">Trait</a>
                    <a href="pages/races.php?type=loisir">Loisir</a>
                    <a href="pages/races.php?type=sport">Sport</a>
                </div>
            </div>
            <div class="noDrop">
                <li><a id="product" href="pages/races.php">Races</a></li>
            </div>
            <li><a href="pages/infections.php">Infections</a></li>
            <li><a href="pages/maladies.php">Maladies</a></li>
            <li><a href="pages/galops.php">Galops</a></li>
            <li><a href="pages/metiers.php">Métiers</a></li>
            <li><a href=""><i id="search" class="fas fa-search"></i></a></li>
            <?php
            if (!empty($_SESSION) and $_SESSION['connected'] = true) {
                echo "<li><button id='profilBtn' onclick='openProfile()'>Profil</button></li>";
            } else {
                echo "<li><button id='loginBtn' onclick='openConnexion()'>Connexion</button></li>";
            }
            ?>
        </ul>
    </nav>
</div>
<div id="head">
    <img src="images/illustration1.png" id="illustration1">
    <h1 id="Titre1">Bienvenue</h1>
    <p id="Presentation">Bonjour et bienvenue sur HorseDico, ici vous trouvrez des renseignement <br/>
                        sur toutes les races de cheval ainsi que sur toutes les maladies et infections <br/>
                        et infections qu'ils subissent, mais vous trouvrez aussi toutes les études <br/>
                        possible pour travailler avec eux. Ainsi que des cours et des quizz adaptés <br/>
                        pour chaques Galop. J'espère que le site va vous plaire!</p>
    <a id="contact" href="pages/contact.php">Contact</a>
</div>
<h2 id="Titre2">Différentes races</h2>
<div id="racecarte">
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom1">Selle Français</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom1">Selle Français</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom1">Selle Français</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom1">Selle Français</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom1">Selle Français</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom1">Selle Français</h3>
        </div>
    </div>
</div>
<h2 id="Titre3">Différentes infections</h2>
<div id="racecarte">
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom2">Pneumonie</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom2">Pneumonie</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom2">Pneumonie</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom2">Pneumonie</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom2">Pneumonie</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom2">Pneumonie</h3>
        </div>
    </div>
</div>
<h2 id="Titre4">Différentes maladies</h2>
<div id="racecarte">
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom3">Lyme</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom3">Lyme</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom3">Lyme</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom3">Lyme</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom3">Lyme</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/images.jpg" class="illustration2">
            <h3 class="nom3">Lyme</h3>
        </div>
    </div>
</div>
<h2 id="Titre5">Galops</h2>
<div id="galopcarte">
    <div>
        <div class="galopcheval">
            <img src="images/galop.jpg" class="illustration3">
            <h3 class="nom4">Galop 1</h3>
        </div>
    </div>
    <div>
        <div class="galopcheval">
            <img src="images/galop.jpg" class="illustration3">
            <h3 class="nom4">Galop 2</h3>
        </div>
    </div>
    <div>
        <div class="galopcheval">
            <img src="images/galop.jpg" class="illustration3">
            <h3 class="nom4">Galop 3</h3>
        </div>
    </div>
    <div>
        <div class="galopcheval">
            <img src="images/galop.jpg" class="illustration3">
            <h3 class="nom4">Galop 4</h3>
        </div>
    </div>
    <div>
        <div class="galopcheval">
            <img src="images/galop.jpg" class="illustration3">
            <h3 class="nom4">Galop 5</h3>
        </div>
    </div>
    <div>
        <div class="galopcheval">
            <img src="images/galop.jpg" class="illustration3">
            <h3 class="nom4">Galop 6</h3>
        </div>
    </div>
    <div>
        <div class="galopcheval">
            <img src="images/galop.jpg" class="illustration3">
            <h3 class="nom4">Galop 7</h3>
        </div>
    </div>
</div>
<h2 id="Titre4">Différents métiers</h2>
<div id="racecarte">
    <div>
        <div class="profilcheval1">
            <img src="images/metier.jpg" class="illustration2">
            <h3 class="nom5">Palfrenier</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/metier.jpg" class="illustration2">
            <h3 class="nom5">Palfrenier</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/metier.jpg" class="illustration2">
            <h3 class="nom5">Palfrenier</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/metier.jpg" class="illustration2">
            <h3 class="nom5">Palfrenier</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/metier.jpg" class="illustration2">
            <h3 class="nom5">Palfrenier</h3>
        </div>
    </div>
    <div>
        <div class="profilcheval1">
            <img src="images/metier.jpg" class="illustration2">
            <h3 class="nom5">Palfrenier</h3>
        </div>
    </div>
</div>
<div>

</div>
</body>
</html>
