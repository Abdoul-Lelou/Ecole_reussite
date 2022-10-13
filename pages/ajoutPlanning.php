<?php
require "../model/model.php";

if (isset(
    $_POST['matiere'],
    $_POST['start'],
    $_POST['end'],
    $_POST['jour'],
    $_POST['user'],
    $_POST['matiere']

)) {



    $matiere = trim($_POST['matiere']);
    $start = $_POST['start'];
    $end = $_POST['end'];
    $jour = $_POST['jour'];
    $user = $_POST['user'];
    $classe = $_POST['classe'];

    $requeste = new ModelUser();

    $add = $requeste->addPlanning($matiere, $start, $end, $jour, $user, $classe);
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<header>
        <?php
            include 'navbar.php';
        ?>

    </header>
    <div class="container d-flex justify-content-center h-100 col-md-12  mt-4">

        <div class="col-md-10 mt-4 p-4 ">


            <nav class="navbar bg-dark mt-4">
                <div class="container ">
                    <a class="navbar-brand text-white bg-dark pe-none" href="#">
                        <img src="../img/ecole_reussite.png" alt="Logo" width="30" height="34" class="d-inline-block align-text-top">
                        Ajouter un Planning
                    </a>
                    <?php
                    if (isset($add)) {
                        echo ' 
                                <div id="msg" class="d-flex justify-content-center" role="alert">
                                    <span class="badge bg-success border border-success">Planing enregistré!</span>
                                </div>          
                            ';
                        echo ' 
                            <script>
                                setTimeout(()=>{document.getElementById("msg").remove()},2000);
                            </script>          
                        ';
                    }
                    ?>
                </div>
            </nav>

            <form class="row g-3 mt-4 bg-light needs-validation" novalidate action="ajoutPlanning.php" method="post">

                <div class="col-md-6 mt-2">
                    <label for="date">Date</label>
                    <input type="date" name="jour" placeholder="date" onchange="checkDate()" class="form-control" id="validationServer01" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                    <div class="invalid-date" style="display: none;">date invalide</div>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="eleve">Proffesseur</label>
                    <select name="user" id="user" class="form-select is-valid" id="validationServer02" required>
                        <option selected disabled value="">Choisir...</option>
                        <?php
                        $db = new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;', 'root', '');
                        $sql = $db->prepare('SELECT * FROM user WHERE roles="employer"');
                        $sql->execute();

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

                <div class="col-md-6 mt-2">
                    <label for="debut">Début</label>
                    <input type="time" name="start" id="heure" onchange="checkStartTime()" id="validationServer03" placeholder="heure" class="form-control" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                    <div class="invalid-heure" style="display: none;">heure invalide</div>
                </div>

                <div class="col-md-6 mt-2 ">
                    <label for="matiere">Matiere</label>
                    <select name="matiere" class="form-select is-valid" id="validationServer04" required>
                        <option selected disabled value="">Choisir...</option>
                        <option value="français" name='sexe'>français</option>
                        <option value="histoire" name='sexe'>histoire</option>
                        <option value="maths" name='sexe'>maths</option>
                        <option value="physique" name='sexe'>physique</option>
                        <option value="chimie" name='sexe'>chimie</option>
                        <option value="geographie" name='sexe'>geographie</option>
                        <option value="anglais" name='sexe'>anglais</option>
                        <option value="svt" name='sexe'>svt</option>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="fin">Fin</label>
                    <input type="time" name="end" id="heureEnd" onchange="checkEndTime()" placeholder="heure" id="validationServer05" class="form-control" required>

                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                    <div class="invalid-heureEnd" id="end" style="display: none;">heure invalide</div>
                </div>


                <div class="col-md-6 mt-2">
                    <label for="classe">Classe</label>
                    <select name="classe" id="classe" placeholder="classe" class="form-select is-valid" id="validationServer06" required>
                        <option selected disabled value="">Choisir...</option>
                        <!-- <option value="m" name='sexe'>M</option>
                <option value="f" name='sexe'>F</option> -->

                        <?php
                        $db = new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;', 'root', '');
                        $sql = $db->prepare('SELECT * FROM classes');
                        $sql->execute();

                        while ($donnee = $sql->fetch()) {
                            echo '<option value=' . $donnee['id'] . '>';
                            echo ($donnee['nom']);
                            echo '</option>';
                        }
                        ?>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>
                <div class="row d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-success col-3">
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
    
    <script src="js/planning.js"></script>
</body>

</html>