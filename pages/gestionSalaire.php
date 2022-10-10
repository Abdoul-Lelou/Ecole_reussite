<?php
require "../model/model.php";

if (isset(
    $_POST['date_heure'],
    $_POST['montant'],
    $_POST['Employer'],

)) {
    /* print_r($_POST); */
    $date_heure = trim($_POST['Date_Heure']);
    $montant = trim($_POST['Montant']);
    $employer = trim($_POST['Employer']);

    $requeste = new ModelUser();

    $matricule = $requeste->generateMatricule();

    $requeste->addSalaire($Date_Heure, $Montant, $Employer);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header>
        <?php
        include 'navbar.php';
        ?>
    </header>
    <div class="container col-6 mt-5 ">
        <div class="container  mt-5 ">


            <form class="row d-flex justify-content-center h-100 col-md-12  g-3 mt-4 bg-light needs-validation col-10 " novalidate action="gestionSalaire.php" method="post">
                <nav class="navbar bg-dark mb-5 sm-2">
                    <div class="container ">
                        <a class="navbar-brand text-white bg-dark col-sm-2" href="#">
                            <img src="../img/ecole_reussite.png" alt="Logo" width="30" height="34" class="d-inline-block align-text-top">
                            <span class="col-sm-2">Ajouter d'un salaire</span>
                        </a>
                    </div>
                </nav>
                <div class="col-md-10 mt-4">
                    <label for="input1">Date_Heure</label>
                    <input type="datetime-local" name="date_heure" placeholder="date_heure" class="form-control p-2" id="validationServer01" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-10 mt-4">
                    <label for="input2">montant</label>
                    <input type="text" name="montant" onchange="checkmontant()" placeholder="montant" class="form-control montant p-2" id="validationServer02" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                    <div  class="invalid-montant" style="display: none;">veillez saisie des chiffres</div>
                </div>
                            <div class="col-md-10 mt-4">
                                <label for="input3">Employer</label>
                                <select name="employer" placeholder="employer" class="form-select is-valid p-2" id="validationServer03" required>
                                    <option selected disabled value="">Choisir...</option>
                                    <option value="" name='employer'></option>
                                    <option value="" name='employer'></option>
                                    <option value="" name='employer'></option>
                                    <option value="" name='employer'></option>
                                    <option value="" name='employer'></option>

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