<?php
    //test si les variables existent et si elle ne sont pas vides
    if(isset($_POST['nom_session']) AND !empty($_POST['nom_session']))
    {
        $nom_session = $_POST['nom_session']; 
                    
        //création d'un nouvel objet session  
        $ses = new Session($nom_session);
        var_dump($ses);        
        //fonction affichage de la session créé.
        $ses->showSession($nom_session);
        //récupération du nom de la session 
        $nom_session = $ses->getNomSession();        
        //vérification de l'objet session
        var_dump($ses);
        try 
        {   
            //insertion de la session en BDD 
            $ses->createSession($nom_session,$bdd);
        }
        catch(Exception $e)
        {   //affichage d'une exception
            die('Erreur : '.$e->getMessage());
        }            
    }
    //sinon
    else
    {   
        //variable nom de session à vide
        $nom_session = "";        
        //nouveau stagiaire  
        $ses = new Session($nom_session);
        //affichage des erreurs
        $ses->showError($nom_session);        
    }

?>