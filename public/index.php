<?php

if(isset($_GET['p'])){
    echo "rien";


}else{
    # homepage title
    $title = "Accueil";
    # homepage view
    include "../templates/accueilView.php";

}


