<?php
if (!isset($_REQUEST['uc'])) {
    $uc = "accueil" ;
}
else {
    $uc = $_REQUEST['uc'] ;
}

switch ($uc)
{
    case 'accueil' : { 
        include "c_accueil.php" ; 
        break ;
    }
    case 'user' : { 
        if ($_SESSION['droits'] == "1") {
            include "c_user.php" ; 
        }
        break ;        
    }
    case 'manage' : { 
        if ($_SESSION['droits'] == "0") {
            include "c_manage.php";            
        }
        break; 
    }
        case 'professeur' : { 
        if ($_SESSION['droits'] == "2") {
            include "c_professeur.php";            
        }
        break; 
    }
	
}
?>