<?php
require "../model/model.php";

if (isset(
    $_POST['nom'],
    $_POST['prenom'],
    $_POST['age'],
    $_POST['sexe'],
    $_POST['username'],
    $_POST['passwords'],
    $_POST['niveau'],
    $_POST['lieu_naissance'],
    $_POST['classe']

)) {



    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $age = trim($_POST['age']);
    $sexe = trim($_POST['sexe']);
    $roles = 'eleve';
    $username = trim($_POST['username']);
    $passwords = trim($_POST['passwords']);
    $niveau = trim($_POST['niveau']);
    $lieu_naissance = ltrim($_POST['lieu_naissance']);
    $classe = ltrim($_POST['classe']);


    $requeste = new ModelUser();

    $matricule = $requeste->generateMatricule();

    $add=$requeste->ajoutEleve($nom, $prenom, $age, $sexe, $username, $passwords, $roles, $niveau, $lieu_naissance, $matricule,$classe);
    // $requeste->getUserByRole();

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

    <div class="container d-flex justify-content-center h-100 col-md-12  ">

        <div class="col-md-10  ">


            <nav class="navbar bg-dark mt-2">
                <div class="container ">
                    <a class="navbar-brand text-white bg-dark pe-none" href="#">
                        <img src="../img/ecole_reussite.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                        Ajouter un Eleve
                    </a>
                    <a class="navbar-brand text-white bg-dark ml-auto" href="#">
                        <?php
                            // if($add) echo '<span class="alert alert-success">Ajout reussie</span>';
                            // else echo '<span class="alert alert-danger">Ajout echoué</span>'

                            if (isset($add)) {
                                echo ' 
                                        <div id="msg" class="d-flex justify-content-center" role="alert">
                                            <span class="badge bg-success border border-success">Ajout reussie!</span>
                                        </div>          
                                    ';
                                echo ' 
                                    <script>
                                        setTimeout(()=>{document.getElementById("msg").remove()},2000);
                                    </script>          
                                ';
                            }else{
                                echo ' 
                                        <div id="msg" class="d-flex justify-content-center" role="alert">
                                            <span class="badge bg-danger border border-danger">Ajout echoué</span>
                                        </div>          
                                    ';
                                echo ' 
                                    <script>
                                        setTimeout(()=>{document.getElementById("msg").remove()},2000);
                                    </script>          
                                ';
                            }
                        ?>
                    </a>
                </div>
            </nav>

            <form class="row g-3 bg-light needs-validation" novalidate action="ajoutEleve.php" method="post">
                <div class="col-md-6 ">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" placeholder="nom" class="form-control " id="validationServer01" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" placeholder="prenom" class="form-control " id="validationServer02" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="username" class="form-control " id="validationServer03" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6">
                    <label for="password">Password</label>
                    <input type="password" name="passwords" placeholder="password" class="form-control " id="validationServer04" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6">
                    <label for="age">Age</label>

                    <input type="text" name="age" onchange="checkAge()" placeholder="age" class="form-control " id="validationServer05" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                    <div  class="invalid-age" style="display: none;">Age invalide</div>
                </div>

                <div class="col-md-6">
                    <label for="lieu de naissance">Lieu de naissance</label>
                    <input type="text" name="lieu_naissance" placeholder="lieu de naissance" class="form-control " id="validationServer08" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>


                <div class="col-md-6">
                    <label for="input9">niveau</label>
                    <select name="niveau" id="niveau" placeholder="niveau" class="form-select is-valid " id="validationServer06" required>
                        <option selected disabled value="">Choisir...</option>
                        <option value="ci" name='niveau'>ci</option>
                        <option value="cp" name='niveau'>cp</option>
                        <option value="ce1" name='niveau'>ce1</option>
                        <option value="ce2" name='niveau'>ce2</option>
                        <option value="cm1" name='niveau'>cm1</option>
                        <option value="cm2" name='niveau'>cm2</option>
                        <option value="6ème" name='niveau'>6ème</option>
                        <option value="5ème" name='niveau'>5ème</option>
                        <option value="4ème" name='niveau'>4ème</option>
                        <option value="3ème" name='niveau'>3ème</option>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>



                <div class="col-md-6">
                    <label for="input9">sexe</label>
                    <select name="sexe" id="roles" placeholder="sexe" class="form-select is-valid " id="validationServer06" required>
                        <option selected disabled value="">Choisir...</option>
                        <option value="m" name='sexe'>M</option>
                        <option value="f" name='sexe'>F</option>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-6">
                    <label for="input9">Classe</label>
                    <select name="classe" id="classe" placeholder="sexe" class="form-select is-valid " id="validationServer06" required>
                        <option selected disabled value="">Choisir...</option>
                        <option value="ci_A" name='classe'>ci_A</option>
                        <option value="ci_B" name='classe'>ci_B</option>
                        <option value="cp_A" name='classe'>cp_A</option>
                        <option value="cp_B" name='classe'>cp_B</option>
                        <option value="ce1_A" name='classe'>ce1_A</option>
                        <option value="ce1_B" name='classe'>ce1_B</option>
                        <option value="ce2_A" name='classe'>ce2_A</option>
                        <option value="ce2_B" name='classe'>ce2_B</option>
                        <option value="cm1_A" name='classe'>cm1_A</option>
                        <option value="cm1_B" name='classe'>cm1_B</option>
                        <option value="cm2_A" name='classe'>cm2_A</option>
                        <option value="cm2_B" name='classe'>cm2_B</option>
                        <option value="6ème_A" name='classe'>6ème_A</option>
                        <option value="6ème_B" name='classe'>6ème_B</option>
                        <option value="5ème_A" name='classe'>5ème_A</option>
                        <option value="5ème_B" name='classe'>5ème_B</option>
                        <option value="4ème_A" name='classe'>4ème_A</option>
                        <option value="4ème_B" name='classe'>4ème_B</option>
                        <option value="3ème_A" name='classe'>3ème_A</option>
                        <option value="3ème_B" name='classe'>3ème_B</option>

                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-4 mb-2">
                    <button type="submit" class="btn btn-success col-2">
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
    
    <script src="js/ajoutEleve.js"></script>
</body>

</html>