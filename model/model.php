<?php
    class ModelUser 
    {
        var $db;
        public function __construct()
        { 
            try
            {
                $this->db= new PDO('mysql:host=127.0.0.1;dbname=Ecole_reussite;','root','');
            }catch(Exception $e)
            {
                die("Connection erreur du à ".$e->getMessage());
            }
        }  
            
        function redirectUrl ($url){
            echo '<script language="javascript">window.location.href ="'.$url.'"</script>';
        }
        
        function setTimeout($fn, $timeout){
            sleep(($timeout/1000));
            $fn();
        }
        
        
        public function connecter($username,$passwords){
            session_start();
            try{
                $sql=$this->db->prepare('SELECT * FROM user');
                $sql->execute();
            while($donnee = $sql->fetch()){
                if($donnee['username'] ==$username && $donnee['passwords'] ==$passwords && $donnee['etat'] ==0 ){
                    $_SESSION['roles']= $donnee['roles'];
                    $_SESSION['username']= $donnee['username'];
                    header('location:pages/accueil.php');
                }
            }
            

        }  catch(\Throwable $th) {
            echo $th->getMessage();
            $sql->closeCursor();
        }

        
     }


        function generateMatricule($n=3) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $randomString = '';

            // // $sql = 'SELECT MAX(Id) FROM user';
            // // $dbb=$sql->execute();
            // // $this->db->exec('SELECT MAX(Id) FROM user');
            // // $last = $this->db->lastInsertId();

        
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
        
            return 'MAE'.$randomString; //.''.$this->db->lastInsertId();
            // $text= 'ES0';
            // echo $text.''.$this->db->lastInsertId()+1;
        }
        
       
        public function ajoutEleve($nom,$prenom,$age,$sexe,$username,$passwords,$roles,$niveau,$lieu_naissance,$matricule){
            
            try {
                $sql=$this->db->prepare('INSERT INTO `user` ( `nom`, `prenom`, `age`, `sexe`,`username`,`passwords`,`roles`,`niveau`,`lieu_naissance`,`matricule`,`etat`)
                                            VALUES (:nom,:prenom,:age,:sexe,:username,:passwords,:roles,:niveau,:lieu_naissance,:matricule,:etat)');
            
                        $sql->execute(array(
                        
                            'nom' =>$nom,
                            'prenom' => $prenom,
                            'age' => $age,
                            'sexe' => $sexe,
                            'username' => $username,
                            'passwords' => $passwords,
                            'roles' => $roles,
                            'niveau' => $niveau,
                            'lieu_naissance' => $lieu_naissance,
                            'matricule' => $matricule,
                            'etat' => 0
                        
                        ));
                    // return $sql;
                    if ($sql) {
                        # code...
                        echo '
                            <div class="w-50 m-0">
                                <div class="alert alert-primary" role="alert">
                                    A simple primary alert—check it out!
                                </div>
                            </div>
                        ';
                        $sql->closeCursor();
                    }
            } catch (\Throwable $th) {
                echo $th->getMessage();
                $sql->closeCursor();
            }
        }

       
        public function addUser($nom,$prenom,$age,$sexe,$username,$passwords,$roles,$matricule,$lieu_naissance,$email,$tel){
            $etat = 0;
            try {

                $sql=$this->db->prepare('INSERT INTO `user` ( `nom`, `prenom`, `age`, `sexe`,`username`,`passwords`,`roles`,`matricule`,`lieu_naissance`,`email`,`tel`,`etat`)
                                            VALUES (:nom,:prenom,:age,:sexe,:username,:passwords,:roles,:matricule,:lieu_naissance,:email,:tel,:etat)');
                
                $checkMail =$this->db->prepare('SELECT 1 FROM user WHERE email=:email');
                $checkMail->bindParam(":email",$email);
                $checkMail->execute();
                $row = $checkMail->fetch(PDO::FETCH_ASSOC);
            
                if (!$row) {
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
                        'tel' => $tel,
                        'etat' => $etat
                    ));
                    // return $sql;
                    if ($sql) {
                     
                        echo ' 
                            <div class="w-75 h-25 d-flex justify-content-center">
                                <div class="alert alert-primary" role="alert">
                                    Inscription reussie!
                                </div>
                            </div>
                            
                             ';
                             $this->setTimeout($this->redirectUrl("http://localhost/ecole_reussite/pages/accueil.php"),3000);
                        $sql->closeCursor();
                    }
                }else {
                    echo ' 
                            
                                <div id="erroMsg"  class="d-flex justify-content-center" role="alert">
                                    <span class="badge bg-danger border border-danger">Email existe déjà!</span>
                                </div>
                           
                             ';
                 

                    
                    $sql->closeCursor();
                }
                

                    
            } catch (\Throwable $th) {

                echo ' 
                        <div   class="d-flex justify-content-center" role="alert">
                            <span class="badge bg-danger border border-danger">'.$th->getMessage().'</span>
                        </div>          
                     ';
                 
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


        public function addPlanning($matiere,$heure,$jour,$user){
            try {

                $sql=$this->db->prepare('INSERT INTO `planing` ( `matiere`, `heure`, `jour`, `user`)
                                            VALUES (:matiere,:heure,:jour,:user)');
                
                // $checkMail =$this->db->prepare('SELECT 1 FROM user WHERE email=:email');
                // $checkMail->bindParam(":email",$email);
                // $checkMail->execute();
                // $row = $checkMail->fetch(PDO::FETCH_ASSOC);
                
                // if (!$row) {
                    $sql->execute(array(
                        
                        'matiere' =>$matiere,
                        'heure' => $heure,
                        'jour' => $jour,
                        'user' => $user
                    ));
                    
                // }
                    return $sql;
                //     if ($sql) {
                     
                //         echo ' 
                //             <div class="w-75 h-25 d-flex justify-content-center">
                //                 <div class="alert alert-primary" role="alert">
                //                     Inscription reussie!
                //                 </div>
                //             </div>
                            
                //              ';
                //              $this->setTimeout($this->redirectUrl("http://localhost/ecole_reussite/pages/accueil.php"),3000);
                //         $sql->closeCursor();
                //     }
                // }else {
                //     echo ' 
                            
                //                 <div id="erroMsg"  class="d-flex justify-content-center" role="alert">
                //                     <span class="badge bg-danger border border-danger">Email existe déjà!</span>
                //                 </div>
                           
                //              ';
                 

                    
                //     $sql->closeCursor();
                // }
                

                    
            } catch (\Throwable $th) {

                echo ' 
                        <div   class="d-flex justify-content-center" role="alert">
                            <span class="badge bg-danger border border-danger">'.$th->getMessage().'</span>
                        </div>          
                     ';
                 
                $sql->closeCursor();
            }
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

        public function getEtatById($id)
        {
            # code...
        }

        public function getEtat(){

        }


        
    }