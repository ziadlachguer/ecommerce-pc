<?php
session_start();
$connecte = false;
if (isset($_SESSION['utilisateur'])) {
    $connecte = true;
}

?>


<nav class="navbar"  role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">PCBuilderHub</a>
        
        <?php
        $currentPage = $_SERVER['PHP_SELF'];
        ?>
        <div id="navbarBasicExample " class="navbar-menu">
            <div class="navbar-start">
                
                    <a class="navbar-item <?php if ($currentPage == '/ecommerce/index.php') echo 'active' ?>" aria-current="page" href="index.php"><i class="fa-solid fa-home"></i> Accueil</a>
                
                
                    <a class="navbar-item <?php if ($currentPage == '/ecommerce/ajouter_utilisateur.php') echo 'active' ?>" aria-current="page" href="ajouter_utilisateur.php"><i class="fa-solid fa-user-plus"></i>
                        Ajouter utilisateur</a>
                
                <?php
                if ($connecte) {
                ?>
                    
                        <a class="navbar-item <?php if ($currentPage == '/ecommerce/categories.php') echo 'active' ?>" aria-current="page" href="categories.php"><i class="fa-brands fa-dropbox"></i> Liste des catégories</a>
                    
                    
                        <a class="navbar-item <?php if ($currentPage == '/ecommerce/produits.php') echo 'active' ?>" aria-current="page" href="produits.php"><i class="fa-solid fa-tag"></i>
                            Liste des produits</a>
                    
                    
                        <a class="navbar-item <?php if ($currentPage == '/ecommerce/commandes.php') echo 'active' ?>" aria-current="page" href="commandes.php"><i class="fa-solid fa-barcode"></i> Commandes</a>
                    </div>  
                </div>
            </div>   
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                    <button class="bd-cycle" data-target="js-themes" id="themeButton">
                    
                    <span class="icon has-text-warning">
                        <i id="ii" class="fas fa-lg fa-sun"></i>
                    </span>
                    </button>
                        <a class="button has-background-danger-55" aria-current="page" href="deconnexion.php"><i class="fa-solid fa-right-from-bracket"></i><strong>Deconnexion</strong>
                    </a>
                    

                <?php
                } else {
                ?>
                    
                        <a class="navbar-item <?php if ($currentPage == '/ecommerce/connexion.php') echo 'active' ?>" href="connexion.php"><i class="fa-solid fa-arrow-right-to-bracket"></i> Connexion</a>
                    
                <?php
                }
                ?>
                    </div>
                </div>  
                    <!-- <a class="button has-background-danger" href="front/"><i class="fa-solid fa-cart-shopping"></i><strong>Site front</strong></a> -->
            </div>
        
    
          
</nav>
  