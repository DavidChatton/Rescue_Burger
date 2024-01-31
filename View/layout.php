<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="assets/images/Favicon.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="assets/style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
</head>

<body>
    
    <header class="header">
        <nav class="navigation">
                <a href="?page=homepage" class="favicon"><img src="assets/images/Favicon.jpg" alt="logo" class="favicon" />
                </a>

                <input type="checkbox" id="check">
                <label for="check" class="icons">
                    <i class='bx bx-menu' id="menu-icon"></i>
                    <i class='bx bx-x' id="close-icon"></i>
                </label>

                <nav class="navbar">
                    <a href="?page=homepage" style="--i:0;">Accueil</a>
                   <!--  style="--i:3;" -->
                    <a href="?page=contact" style="--i:2;">Contact</a>

                    <?php if (!isset($_SESSION['logged']) || !$_SESSION['logged']) { ?>
                        <a href="?page=login" style="--i:1;">Se connecter</a>
                        <a href="?page=register" style="--i:2;">S'inscrire</a>
                    <?php } ?>
                    
                    <?php if (isset($_SESSION['logged']) && $_SESSION['logged']) { ?>
                        <a href="?page=disconnect" style="--i:3;"> Se déconnecter</a>
                    
                        <a href="?page=shoppingcart">
                                <i class="fa-solid fa-cart-shopping" style="--i4;"></i>
                                <span> 
                                <?php if(is_null($_SESSION['cart'])){
                                    echo 0;
                                }else{
                                    echo count($_SESSION['cart']);
                                }?>
                                </span>   
                        </a>

                    <?php } ?>

                    <!-- <?php // if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
                        <a href="?page=login" style="--i:1;">Administration</a>
                    <?php // } ?> -->
                </nav>

            <?php ?>
        
        </nav>
    </header>
                    
    <main>
        <?php require 'Controller/' . $route . '_controller.php'; ?>
    </main>
    <div class="separating">
        <hr>
    </div>

    <footer>
        <p>©2024 RESCUE BURGER. All Rights Reserved. Privacy • Terms & Conditions • Contact</p> 
    </footer>
    <script src="Controller/shoppingcart_controller.js"></script> 
</body>

</html>