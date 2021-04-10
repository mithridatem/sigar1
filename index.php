<?php
    
    //vue
    include('view/viewConnexion.php');
    //model
    include('model/utilisateur.php');
    //ajout util
    include('utils/testConnexion.php');
    if(isset($_GET['error']) == 1)
    {        
        echo '<script>alert("mot de passe incorrect !!!")</script>';
    }
    else if(isset($_GET['error']) == 1)
    {
        echo '<script>alert("le compte n\'existe pas !!!")</script>';
    }
    else{
        echo '';
    }  
    
?>