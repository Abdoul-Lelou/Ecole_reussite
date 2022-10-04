<?php
    require '../model/model.php';


    if (isset($_POST['nom'],$_POST['prenom'],$_POST['id'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $id = $_POST['id'];

        $user = new ModelUser();

        // $user->edit($id,$nom,$prenom);

    }