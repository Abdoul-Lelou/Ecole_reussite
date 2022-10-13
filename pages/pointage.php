<?php
require "../model/model.php";
//vérification des champs 


if (isset(
    // $_POST['date_heure'],
    $_POST['montant'],
    $_POST['employer'],

)) {

    // $date_heure = trim($_POST['date_heure']);
    $montant = trim($_POST['montant']);
    $employer = trim($_POST['employer']);
    // var_dump($_POST['date_heure'],
    // $_POST['montant'],
    // $_POST['employer']);die;

    $requeste = new ModelUser();

    // $matricule = $requeste->generateMatricule();

    $requeste->addSalaire($montant, $employer);
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

    <title>Document</title>
</head>

<body>
    <header>
        <?php
        include 'navbar.php';
        ?>
    </header>
    <div class="container col-6 mt-4 ">
        <div class="container  mt-4 ">
            <br><br><br>
            <nav class="navbar bg-dark mb-4 sm-2">
                <div class="container ">
                    <a class="navbar-brand text-white bg-dark col-sm-2" href="#">
                        <img src="../img/ecole_reussite.png" alt="Logo" width="30" height="34" class="d-inline-block align-text-top">
                        <span class="col-sm-2">Pointage employer</span>
                    </a>
                </div>
            </nav>

            <form class="row d-flex justify-content-center h-100 col-md-12  g-3 mt-4 bg-light needs-validation col-10 " novalidate action="gestionSalaire.php" method="post">


            <div class="col-md-10 mt-4">
                    <label for="input3">Employer</label>
                    <select name="employer" placeholder="employer" class="form-select is-valid p-2" id="validationServer03" required>
                        <option selected disabled value="">Choisir...</option>
                        <option  value="0">Absent</option>
                        <option  value="1">Present</option>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>
                <div class="col-md-10 mt-4">
                    <label for="input3">Employer</label>
                    <select name="employer" placeholder="employer" class="form-select is-valid p-2" id="validationServer03" required>
                        <option selected disabled value="">Choisir...</option>
                        <?php
                        $db = new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;', 'root', '');
                        $sql = $db->prepare('SELECT * FROM user WHERE roles="employer"');
                        $sql->execute();

                        //afficher la liste des employer
                        while ($donnee = $sql->fetch()) {
                            echo '<option value=' . $donnee['id'] . '>';
                            echo ($donnee['prenom'] . ' ' . $donnee['nom']);
                            echo '</option>';
                        }
                        ?>

                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="row d-flex justify-content-center mt-4 mb-3">
                    <button type="submit" class="btn btn-success col-sm-2 mt-4 p-2">
                        <i class="spinOff">Ajouter</i>
                        <i class="spinOn" style="display: none">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            Loading...
                        </i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <footer>

        <?php
        include 'footer.php';
        ?>
    </footer>
    <script src="js/gestion.js"></script>
</body>


</html>