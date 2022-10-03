

<?php
    class ModelUser 
    {
        var $db;
        public function __construct()
        { 
          try
            {
                $this->db= new PDO('mysql:host=localhost;dbname=Ecole_reussite;','root','');
            }catch(Exception $e)
            {
                die("Connection erreur du à ".$e->getMessage());
            }
        }  

        
        public function connect($username,$passwords){
            $sql= $this->db->prepare('SELECT user WHERE  = ');
                $sql->execute(array(
                    'username'=> $username,
                    'passwords'=> $passwords,
                    
                ));
                return $sql;
        }
        
        /* public function edit($id,$nom,$prenom){
            $sql= $this->db->prepare('UPDATE apprenant SET nom=:nom,prenom=:prenom WHERE id=:id');
                $sql->execute(array(
                    'nom'=> $nom,
                    'prenom'=> $prenom,
                    'id'=>$id
                ));
                return $sql;
        } */
       
        public function ajoutApprenant($nom,$prenom){
                $sql= $this->db->prepare('INSERT INTO apprenant(`id`,`nom`,`prenom`)VALUES(null,:nom,:prenom)');

                $sql->execute(array(
                    'nom'=> $nom,
                    'prenom'=> $prenom
                ));
                return $sql;
        }

        public function addUser($nom,$prenom,$age,$sexe,$username,$passwords,$roles,$matricule,
                                $lieu_naissance=null,$email=null,$niveau=null,$tel=null){
            
            $sql=$this->db->prepare('INSERT INTO `user` ( `nom`, `prenom`, `age`, `sexe`,`username`,`passwords`,`roles`,`tel`,`matricule`,`lieu_naissance`,`niveau`,`email`)
                                            VALUES (:nom,:prenom,:age,:sexe,:username,:passwords,:roles,:tel,:matricule,:lieu_naissance,:niveau,:email)');
            
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
                        'niveau' => $niveau,
                        'email' => $email
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