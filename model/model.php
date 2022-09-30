<?php
    class ModelUser 
    {
        var $db;
        public function __construct()
        { 
          try
            {
                $this->db= new PDO('mysql:host=localhost;dbname=simplon;','root','');
            }catch(Exception $e)
            {
                die("Connection erreur du à ".$e->getMessage());
            }
        }  
       
        public function addUser($nom,$prenom,$age,$sexe,$username,$passwords,$roles,$matricule=null,
                                $lieu_naissance=null,$salaire=null,$email=null,$niveau=null,$tel=null){
            
            $sql=$this->db->prepare('INSERT INTO `user` ( `nom`, `prenom`, `age`, `sexe`,`username`,`passwords`,`roles`,`tel`,`matricule`,`lieu_naissace`,`niveau`,`salaire`,`email`)
                                            VALUES (:nom,:prenom,:age,:sexe,:username,:passwords,:roles,:tel,:matricule,:lieu_naissance,:niveau,:salaire,:email)');
            
                        $sql->execute(array(
                        
                        'nom' =>$nom,
                        'prenom' => $prenom,
                        'age' => $age,
                        'sexe' => $sexe,
                        'username' => $username,
                        'passwords' => $passwords,
                        'roles' => $roles,
                        'tel' => $tel,
                        'matricule' => $matricule,
                        'lieu_naissance' => $lieu_naissance,
                        'email' => $email,
                        'niveau' => $niveau,
                        'salaire' => $salaire
                        
                        ));
                    return $sql;
        }
       
        public function updateUser(){  
        }

        public function getUser(){

        }

        public function getUserById(){

        }

        public function getUserByRole(){

        }

        public function addSalaire(){

        }

        public function updateSalaire(){

        }

        public function getSalaire(){

        }

        public function getSalaireById(){

        }

        public function getSalaireByUserId(){

        }


        public function addPlanning(){

        }

        public function updatePlanning(){

        }

        public function getPlanning(){

        }

        public function getPlanningById(){

        }

        public function getPlanningByUserId(){

        }        

        public function addPaiement(){

        }

        public function updatePaiement(){

        }

        public function getPaiement(){

        }

        public function getPaiementById(){

        }

        public function getPaiementByUserId(){

        }

        public function addPointage(){

        }

        public function updatePointage(){

        }

        public function getPointage(){

        }

        public function getPointageById(){

        }

        public function getPointageByUserId(){

        }




        
    }