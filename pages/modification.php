<?php

require "../model/model.php";

$requete = new ModelUser();

if(isset($_POST['id'])) {
    $id = (int) $_POST['id'];
    $requete->archiveUser($id);

    header("location: list_Eleve.php");
exit;
}

$requete = new ModelUser();

if (isset($_POST['id'])) {
    $id = (int) $_POST['id'];
    $requete->desarchiveUser($id);
}

header("location: list_Eleve.php");
exit;


?>