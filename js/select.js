function choixselect(choix){
    switch(choix){
        case("1"):
            window.open("ajouter-questionnaire.php");
            break;
        case("2"):
            window.open("supresion-questionnaire.php");
            break;
        case("3"):
            window.location.href ="supression-utilisateur.php";
            break;
    }
}