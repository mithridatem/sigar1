<?php
    class Session{
        private $id_session;
        private $nom_session;
        //constructeur :
        public function __construct($nom_session)
        {   
            $this->nom_session = $nom_session;          
        }
        /*-----------------------------------------------------
                Getter and Setter :
        -----------------------------------------------------*/
        //getter id_session
        public function getIdSession()
        {
            return $this->id_session;
        }
        //setter id_session
        public function setIdSession($new_id_session)
        {
            $this->id_session = $new_id_session;
        }
        //getter nom_session
        public function getNomSession()
        {
            return $this->nom_session;
        }
        //setter nom_session
        public function setNomSession($new_nom_session)
        {
            $this->nom_session = $new_nom_session;
        }
        /*-----------------------------------------------------
                            Fonctions :
        -----------------------------------------------------*/
        //fonction affichage des informations
        public function showSession($nom_session){
            //message de création de session
            $mess = "Session ajouté à la BDD : Nom : $nom_session";
            echo '<script>console.log("'.$mess.'")</script>';
        }             
        //fonction affichage des erreurs 
        public function showError($nom_session){
            $mess = "Veuillez saisir un nom de session !!!";
            echo '<script>console.log("'.$mess.'")</script>';
        }
        //fonction insertion d'un stagiaire en BDD
        public function createSession($nom_session, $bdd){                                 
            //préparation de la requête SQL
            $req = $bdd->prepare('INSERT INTO classe(nom_session) 
            VALUES (:nom_session)');
            //éxécution de la requête SQL
            $req->execute(array(
            'nom_session' => iconv("UTF-8", "ISO-8859-1//TRANSLIT", $nom_session),                                                                  
            ));
            //message de création de session
            $mess = "la session : '.$nom_session.'à était ajoutée ! ";                        
            echo '<script>console.log("'.$mess.'")</script>';
            //fermeture de la connexion à la bdd
            $req->closeCursor();                          
        }
    }
?>