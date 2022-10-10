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
        
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
        
            return 'MAE'.$randomString;
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

        public function getUserById($id){
            try{
                $sql=$this->db->prepare('SELECT * FROM user where id=:id');
                $sql->execute(['id'=>$id]);
        
                return $sql->fetchAll();
        }  catch(\Throwable $th) {
            echo $th->getMessage();
            $sql->closeCursor();
        }
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


        public function addPlanning($matiere,$start,$end,$jour,$user,$classe){
            try {

                $sql=$this->db->prepare('INSERT INTO `planning` ( `matiere`, `startTime`, `endTime`, `jour`, `user`,`classe`)
                                            VALUES (:matiere,:startTime,:endTime,:jour,:user,:classe)');
                
                $checkMail =$this->db->prepare('SELECT * FROM planning WHERE matiere=:matiere and jour= :jour and user=:user and startTime =:startTime');
                $checkMail->bindParam(":matiere",$matiere);
                $checkMail->bindParam(":jour",$jour);
                $checkMail->bindParam(":user",$user);
                $checkMail->bindParam(":startTime",$start);
                $checkMail->execute();
                $row = $checkMail->fetch(PDO::FETCH_ASSOC);

               
                if (!$row) {

                    $sql->execute(array(
                        
                        'matiere' =>$matiere,
                        'startTime' => $start,
                        'endTime' => $end,
                        'jour' => $jour,
                        'user' => $user,
                        'classe' => $classe
                    ));

                    return $sql;
                    $sql->closeCursor();
                    
                }else{
                    echo ' 
                            
                                <div   class="d-flex justify-content-center" role="alert">
                                    <span id="errorMsg" class="badge bg-danger border border-danger">Cours déjà prévu à cette date!</span>
                                </div>
                                <script>
                                    setTimeout(()=>{
                                        document.querySelector("#errorMsg").style.display= "none";
                                    },2000)
                                </script>
                           
                             ';
                    $sql->closeCursor();
                }
                

                    
            } catch (\Throwable $th) {

                echo ' 
                        <div class="d-flex justify-content-center" role="alert">
                            <span class="badge bg-danger border border-danger">'.$th->getMessage().'</span>
                        </div>          
                     ';
                 
                $sql->closeCursor();
            }
        }

        public function updatePlanning(){

        }

        public function getPlanning(){
            try{
                    $sql=$this->db->prepare('SELECT * FROM planning');
                    $sql->execute();
            
                    return $sql->fetchAll();
            }  catch(\Throwable $th) {
                echo $th->getMessage();
                $sql->closeCursor();
            }

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

        public function addClasse($eleve){

            try {

                $sql=$this->db->prepare('INSERT INTO `classe` ( `nom`, `niveau`, `eleve`)VALUES (:nom,:niveau,:eleve)');
                
                $checkMail =$this->db->prepare('');
                $checkMail->bindParam(":matiere",$matiere);
                $checkMail->bindParam(":jour",$jour);
                $checkMail->bindParam(":user",$user);
                $checkMail->bindParam(":startTime",$start);
                $checkMail->execute();
                $row = $checkMail->fetch(PDO::FETCH_ASSOC);

               
                if (!$row) {

                    // $sql->execute(array(
                        
                    //     'matiere' =>$matiere,
                    //     'startTime' => $start,
                    //     'endTime' => $end,
                    //     'jour' => $jour,
                    //     'user' => $user,
                    //     'classe' => $classe;
                    // ));

                    return $sql;
                    $sql->closeCursor();
                    
                }else{
                    echo ' 
                            
                                <div   class="d-flex justify-content-center" role="alert">
                                    <span id="errorMsg" class="badge bg-danger border border-danger">Cours déjà prévu à cette date!</span>
                                </div>
                                <script>
                                    setTimeout(()=>{
                                        document.querySelector("#errorMsg").style.display= "none";
                                    },2000)
                                </script>
                           
                             ';
                    $sql->closeCursor();
                }
                

                    
            } catch (\Throwable $th) {

                echo ' 
                        <div class="d-flex justify-content-center" role="alert">
                            <span class="badge bg-danger border border-danger">'.$th->getMessage().'</span>
                        </div>          
                     ';
                 
                $sql->closeCursor();
            }

        }

        
    }