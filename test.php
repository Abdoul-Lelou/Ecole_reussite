  <?php  
  
 /* try{
    $db = new PDO('mysql:host=localhost; dbname=test','root','');
    echo'connexion reussie'; 
  }catch(Exception $e){
    die('echec de la connexion'.$e->getMessage());
  } */
  $eleve = readline('entrez la note :');
  if ($eleve >=14) {
    echo 'bon travail';
  }else{
    echo'peut mieux faire';
  }
  /*'prenom'=>'marie',
   'nom'=>'sow'];
  echo $eleve ['prenom'].' '.$eleve['nom'].' '.$eleve['notes'][1];
  
  print_r($eleve);*/
  
?>

require '../model/model.php';
if(isset($_POST['id')){
    $id = $_POST['id'];
   
    
    $mariee = new ModelUser();
    $mariee->supp($id );
}

/* if(isset($_POST['nom'],$_POST['prenom'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $marie = new ModelUser();
    $marie->ajout($nom, $prenom);

} */
<?php
    require '../model/model.php';

    if (isset($_POST['username'],$_POST['passwords'])) {


            $requeste = new ModelUser(){

            $requeste->conect($_POST['username'],$_POST['passwords']);

            }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Page CONNEXION</title>
</head>
<body >
<!-- class="bg-image" style="background-image: url(https://media-files.abidjan.net/photo/photoecole.jpg)" -->

    <div class=" container d-flex justify-content-center mt-5  " >
 
    <form action="connection.php" method="post" class="form-control-lg m-5">
        <div class="col-12">
        <legend class=" text-center m-5">CONNEXION</legend>
        <div class="col-md-3">
        <label for="Nom d'utilisateur">Username:</label>
        <input class="p-2 mb-5 " type='text' name='username' placeholder="nom d'utilisateur">
        </div>
        
        <div class="col-md-3">
        <label for="mot de passe">Password:</label>
        <input class="p-2 mb-5" type="password" name="passwords" placeholder="mot de passe">
        </div>

        <div class="text-center mb-2 "> 
        <button  class="bg-success p-2 rounded" type="submit">Se connecter</button><br>
        </div>

        <a class="color-success" href="inscription.php">S'inscrire</a>
    </form>
</div>
</body>
</html>

