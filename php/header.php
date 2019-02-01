<?php  

if(empty($_SESSION['statut'])){?>
    <header class=" bg-primary">
  <!--Navbar-->
  <nav class="navbar navbar-light navbar-1 white">
  
    <!-- Search form -->
        <div class="col-mb-4">
            <input class="form-control" type="text" placeholder="Rechercher" aria-label="Search">
        </div>

        <!-- Collapse button -->
        <div class="contenair">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../php/connexion.php">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../php/inscription.php">Inscription</a>
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
  
    <!-- Search form -->
        <div class="col-mb-4">
            <input class="form-control" type="text" placeholder="Rechercher" aria-label="Search">
        </div>

        <!-- Collapse button -->
        <div class="contenair">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Questionnaire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">utilisateur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../php/deconnexion.php">Deconnexion</a>
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
  
    <!-- Search form -->
        <div class="col-mb-4">
            <input class="form-control" type="text" placeholder="Rechercher" aria-label="Search">
        </div>

        <!-- Collapse button -->
        <div class="contenair">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Questionnaire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./administration.php">Administration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../php/deconnexion.php">Deconnexion</a>
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