<?php
    class ModelUser 
    {
        var $db;
        public function __construct()
        { 
          try
            {
                $this->db= new PDO('mysql:host=localhost;dbname=ecole_reussite;','root','');
            }catch(Exception $e)
            {
                die("Connection erreur du à ".$e->getMessage());
            }
        }  

        public function generateMatricule(){
            
        }
       
        public function ajoutEleve($nom,$prenom,$age,$sexe,$username,$passwords,$roles,$niveau,$lieu_naissance){
            
            try {
                $sql=$this->db->prepare('INSERT INTO `user` ( `nom`, `prenom`, `age`, `sexe`,`username`,`passwords`,`roles`,`niveau`,`lieu_naissance`)
                                            VALUES (:nom,:prenom,:age,:sexe,:username,:passwords,:roles,:niveau,:lieu_naissance)');
            
                        $sql->execute(array(
                        
                        'nom' =>$nom,
                        'prenom' => $prenom,
                        'age' => $age,
                        'sexe' => $sexe,
                        'username' => $username,
                        'passwords' => $passwords,
                        'roles' => $roles,
                        'niveau' => $niveau,
                        'lieu_naissance' => $lieu_naissance
                       
                        ));
                    // return $sql;
                    if ($sql) {
                        # code...
                        echo "<script>alert('Inscription reussie')</script>";
                        $sql->closeCursor();
                    }
            } catch (\Throwable $th) {
                echo $th->getMessage();
                $sql->closeCursor();
            }
        }

        public function addUser($nom,$prenom,$age,$sexe,$username,$passwords,$roles,$matricule,$lieu_naissance=null,$email=null,$tel=null){
            
            try {
                $sql=$this->db->prepare('INSERT INTO `user` ( `nom`, `prenom`, `age`, `sexe`,`username`,`passwords`,`roles`,`matricule`,`lieu_naissance`,`email`,`tel`)
                                            VALUES (:nom,:prenom,:age,:sexe,:username,:passwords,:roles,:matricule,:lieu_naissance,:email,:tel)');
            
                        $sql->execute(array(
                        
                        'nom' =>$nom,
                        'prenom' => $prenom,
                        'age' => $age,
                        'sexe' => $sexe,
                        'username' => $username,
                        'passwords' => $passwords,
                        'roles' => $roles,
                        'matricule' => $matricule,
                        'lieu_naissance' => $lieu_naissance,
                        'email' => $email,
                        'tel' => $tel
                        ));
                    // return $sql;
                    if ($sql) {
                     
                        echo "<script>alert('Inscription reussie')</script>";
                        $sql->closeCursor();
                    }
            } catch (\Throwable $th) {
                // echo $th->getMessage();
                $sql->closeCursor();
            }
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