<?php

if(isset($_GET['p'])){
    
    switch($_GET['p']){
        case "aboutme":
            $title = "A propos de moi";
            include "../templates/aproposView.php";
            break;
        case "history":
            $title = "Mon histoire";
            include "../templates/histoireView.php";
            break;
        case "contact":
            $title = "Me contacter";
            include "../templates/contactView.php";
            break;
    }


}else{
    # homepage title
    $title = "Accueil";
    # homepage view
    include "../templates/accueilView.php";

}


