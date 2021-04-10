<?php 
 
    //test si les variables existent et si elle ne sont pas vides
    if(isset($_POST['nom_stg']) AND isset($_POST['prenom_stg']) 
    AND !empty($_POST['nom_stg']) AND !empty($_POST['prenom_stg']))
    {
        $nom = $_POST['nom_stg']; 
        $prenom = $_POST['prenom_stg'];                 
        //création d'un nouvel objet utilisateur  
        $stg = new Stagiaire($nom, $prenom);
        var_dump($stg);        
        //fonction affichage du compte utilisateur créé.
        $stg->showStagiaire($nom, $prenom);
        //récupération du nom utilisateur 
        $nom = $stg->getNomStg();
        //récupération du login utilisateur
        $login = $stg->getPrenomStg();
        //vérification de l'objet utilisateur
        var_dump($stg);
        try 
        {   
            //insertion de l'utilisateur en BDD 
            $stg->createStagiaire($nom, $prenom, $bdd);
        }
        catch(Exception $e)
        {   //affichage d'une exception
            die('Erreur : '.$e->getMessage());
        }            
    }
    //sinon
    else
    {   
        //variable nom utilisateur à vide
        $nom = "";
        //variable prenom utilisateur à vide
        $prenom = "";    
        //nouveau stagiaire  
        $stg = new Stagiaire($nom, $prenom);
        //affichage des erreurs
        $stg->showError($nom, $prenom);        
    }
?>       