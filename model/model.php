

<?php
    class ModelUser 
    {
        var $db;
        public function __construct()
        { 
          try
            {
<<<<<<< HEAD
                $this->db= new PDO('mysql:host=localhost;dbname=Ecole_reussite;','root','');
=======
                $this->db= new PDO('mysql:host=localhost;dbname=ecole_reussite;','root','');
>>>>>>> c96807c21ddd98ad754012dda657289f7729ef5a
            }catch(Exception $e)
            {
                die("Connection erreur du à ".$e->getMessage());
            }
        }  

<<<<<<< HEAD
        
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
=======
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
>>>>>>> c96807c21ddd98ad754012dda657289f7729ef5a
            
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
<<<<<<< HEAD
                        'niveau' => $niveau,
                        'email' => $email
=======
                        'email' => $email,
                        'tel' => $tel
>>>>>>> c96807c21ddd98ad754012dda657289f7729ef5a
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