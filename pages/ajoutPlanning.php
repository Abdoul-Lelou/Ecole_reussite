<?php
require "../model/model.php";

if (isset(
    $_POST['matiere'],
    $_POST['heure'],
    $_POST['jour'],
    $_POST['user']
    
)) {



    $matiere = trim($_POST['matiere']);
    $heure = $_POST['heure'];
    $jour = $_POST['jour'];
    $user = $_POST['user'];

    $requeste = new ModelUser();

    $add = $requeste->addPlanning($matiere, $heure, $jour, $user);
    if ($add) {
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

    <div class="container d-flex justify-content-center h-100 col-md-12  ">

        <div class="col-md-8  p-4 ">


            <nav class="navbar bg-dark">
                <div class="container ">
                    <a class="navbar-brand text-white bg-dark pe-none" href="#">
                        <img src="../img/ecole_reussite.png" alt="Logo" width="30" height="34" class="d-inline-block align-text-top">
                        Ajouter un Planning
                    </a>
                </div>
            </nav>

            <form class="row g-3 mt-4 bg-light d-flex justify-content-center needs-validation" novalidate action="ajoutPlanning.php" method="post">

                <div class="col-md-8">
                    <label for="prenom">date</label>
                    <input type="date" name="jour" placeholder="date" class="form-control" id="validationServer01" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-8">
                    <label for="username">heure</label>
                    <input type="time" name="heure" id="heure" onchange="checkTime()" placeholder="heure" min="08:00:00" max="18:00:00" class="form-control" id="validationServer02" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                    <div  class="invalid-heure" style="display: none;">heure invalide</div>
                </div>
                
                <div class="col-md-8  ">
                    <label for="nom">matiere</label>                    
                    <select name="matiere"  class="form-select is-valid" id="validationServer03" required>
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

                <div class="col-md-8">
                <label for="nom">Eleve</label>
                <select name="user" id="user" class="form-select is-valid" id="validationServer04" required>
                            <option selected disabled value="">Choisir...</option>
                                <?php
                                    $db= new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;','root','');
                                    $sql=$db->prepare('SELECT * FROM user WHERE roles="eleve"');
                                    $sql->execute();
                                    
                                    while($donnee = $sql->fetch()){  
                                        echo '<option value='.$donnee['id'].'>';
                                            echo ($donnee['prenom'].' '.$donnee['nom'].' | Niveau: '.$donnee['niveau']);
                                           

                                        echo '</option>';
                                        
                                    }
                                ?>
                        </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>
                
                <div class="row d-flex justify-content-center mt-4 mb-3">
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
    <script src="js/planning.js"></script>
</body>

</html>