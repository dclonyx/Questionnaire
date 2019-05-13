<?php  

if(empty($_SESSION['statut'])){?>
    <header class=" bg-primary">
    <!--Navbar-->
    <nav class="navbar navbar-light navbar-1 white">
  
        <div class="contenair w-100 d-flex justify-content-between align-items-center">
            <p class="m-0">Vous n'êtes pas connecté</p>
            <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/articles.php">Tous les articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/connexion.php">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/inscription.php">Inscription</a>
            </li>
        </ul>
        <!-- Links -->

  </div>
  <!-- Collapsible content -->

  </nav>
<!--/.Navbar-->
    </header>
<?php    
} else if($_SESSION['statut'] == 1){
    ?>
    <header class=" bg-primary">
    <!--Navbar-->
    <nav class="navbar navbar-light navbar-1 white">
    
        <div class="contenair w-100 d-flex justify-content-between align-items-center">
            <p class="m-0">Connecté en tant que <?php echo $_SESSION['pseudo']?></p>
            <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/articles.php">Tous les articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/mes_articles.php">Mes articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/deconnexion.php">Deconnexion</a>
            </li>
        </ul>
        <!-- Links -->

  </div>
  <!-- Collapsible content -->

  </nav>
<!--/.Navbar-->
    </header>

<?php
} else if($_SESSION['statut'] == 2){
    ?>
    <header class=" bg-primary">
    <!--Navbar-->
    <nav class="navbar navbar-light navbar-1 white">

        <div class="contenair w-100 d-flex justify-content-between align-items-center">
            <p class="m-0">Connecté en tant que <?php echo $_SESSION['pseudo']?></p>
            <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/articles.php">Tous les articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/mes_articles.php">Mes articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/archives.php">Archives</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/administration.php">Administration des articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Affichage/deconnexion.php">Deconnexion</a>
            </li>
        </ul>
        <!-- Links -->

  </div>
  <!-- Collapsible content -->

  </nav>
<!--/.Navbar-->
    </header>
    <?php
}
?>