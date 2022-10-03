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
