<?php

require '../model/model.php';

$requeste = new ModelUser();

if(isset($_POST['id_em'])) {
    $id = (int) $_POST['id_em'];
    $requeste->archiveUser($id);

    header("location: list_Employer.php");
exit;
}

$requete = new ModelUser();

if (isset($_POST['id_emd'])) {
    $id = (int) $_POST['id_emd'];
    $requete->desarchiveUser($id);
}

header("location: list_Employer.php");
exit;

?>