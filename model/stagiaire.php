<?php
    class Stagiaire{
        private $id_stg;
        private $nom_stg;
        private $prenom_stg;
        private $id_session;
        //constucteur :
        public function __construct($nom_stg, $prenom_stg)
        {   
            $this->nom_stg = $nom_stg;
            $this->prenom_stg = $prenom_stg;           
        }
        /*-----------------------------------------------------
                Getter and Setter :
        -----------------------------------------------------*/
        //getter id_stg
        public function getIdStg()
        {
            return $this->id_stg;
        }
        //setter id_stg
        public function setIdStg($new_id_stg)
        {
            $this->id_stg = $new_id_stg;
        }
        //getter nom_stg
        public function getNomStg()
        {
            return $this->nom_stg;
        }
        //setter nom_stg
        public function setNom_stg($new_nom_stg)
        {
            $this->nom_stg = $new_nom_stg;
        }
        //getter prenom_stg
        public function getPrenomStg()
        {
            return $this->prenom_stg;
        }
        //setter prenom_stg
        public function setLogin($new_prenom_stg)
        {
            $this->prenom_stg = $new_prenom_stg;
        }
        //getter id_session
        public function getIdSession()
        {
            return $this->id_session;
        }
        //setter prenom_stg
        public function setIdSession($new_id_session)
        {
            $this->id_session = $new_id_session;
        }
        /*-----------------------------------------------------
                            Fonctions :
        -----------------------------------------------------*/
        //fonction affichage des informations
        public function showStagiaire($nom, $prenom){
            echo 'Stagiaire ajouté à la BDD : <br>Nom : '.$nom.' Prenom : '.$prenom.'';
        }             
        //fonction affichage des erreurs 
        public function showError($nom, $prenom){
            echo 'Veuillez saisir un nom, un prénom';
        }
        //fonction insertion d'un stagiaire en BDD
        public function createStagiaire($nom, $prenom, $bdd){                                 
            //préparation de la requête SQL
            $req = $bdd->prepare('INSERT INTO stagiaire(nom_stg, prenom_stg) 
            VALUES (:nom_stg, :prenom_stg)');
            //éxécution de la requête SQL
            $req->execute(array(
            'nom_stg' => iconv("UTF-8", "ISO-8859-1//TRANSLIT", $nom),
            'prenom_stg' => iconv("UTF-8", "ISO-8859-1//TRANSLIT", $prenom),                                                                  
            ));                        
            echo '<p>le compte : '.$nom.' '.$prenom.' à était ajouté ! </p>';
            //fermeture de la connexion à la bdd
            $req->closeCursor();                          
        } 

        
    }

?>