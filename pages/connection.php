<?php 
require '../model/model.php';
if (isset($_POST['id'] ($_POST['nom']) ($_POST['prenom']);)) {
    $id =$_POST['id'];
    ($nom=$_POST['nom']);
     ($prenom=$_POST['prenom']);
    $richie= new ModelUser();
    $richie->ajout($id);

}
