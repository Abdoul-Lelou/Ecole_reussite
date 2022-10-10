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
    $_POST['lieu_naissance']
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

    $requeste = new ModelUser();

    $matricule = $requeste->generateMatricule();

    $requeste->ajoutEleve($nom, $prenom, $age, $sexe, $username, $passwords, $roles, $niveau, $lieu_naissance, $matricule);
    $requeste->getUserByRole()

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

        <div class="col-md-10 mt-4 p-4 ">


            <nav class="navbar bg-dark">
                <div class="container ">
                    <a class="navbar-brand text-white bg-dark pe-none" href="#">
                        <img src="../img/ecole_reussite.png" alt="Logo" width="30" height="34" class="d-inline-block align-text-top">
                        Ajouter un Eleve
                    </a>
                </div>
            </nav>

            <form class="row g-3 mt-4 bg-light needs-validation" novalidate action="ajoutEleve.php" method="post">
                <div class="col-md-6  mt-4">
                    <label for="nom">nom</label>
                    <input type="text" name="nom" placeholder="nom" class="form-control p-2" id="validationServer01" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6 mt-4">
                    <label for="prenom">prenom</label>
                    <input type="text" name="prenom" placeholder="prenom" class="form-control p-2" id="validationServer02" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6 mt-4">
                    <label for="username">username</label>
                    <input type="text" name="username" placeholder="username" class="form-control p-2" id="validationServer03" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6 mt-4">
                    <label for="password">password</label>
                    <input type="password" name="passwords" placeholder="password" class="form-control p-2" id="validationServer04" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6 mt-4">
                    <label for="age">age</label>
                    <input type="text" name="age" onchange="checkAge()" placeholder="age" class="form-control p-2" id="validationServer05" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                    <div  class="invalid-age" style="display: none;">Age invalide</div>
                </div>

                <div class="col-md-6 mt-4">
                    <label for="lieu de naissance">lieu de naissance</label>
                    <input type="text" name="lieu_naissance" placeholder="lieu de naissance" class="form-control p-2" id="validationServer08" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>


                <div class="col-md-6 mt-4">
                    <label for="input9">niveau</label>
                    <select name="niveau" id="niveau" placeholder="sexe" class="form-select is-valid p-2" id="validationServer06" required>
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



                <div class="col-md-6 mt-4">
                    <label for="input9">sexe</label>
                    <select name="sexe" id="roles" placeholder="sexe" class="form-select is-valid p-2" id="validationServer06" required>
                        <option selected disabled value="">Choisir...</option>
                        <option value="m" name='sexe'>M</option>
                        <option value="f" name='sexe'>F</option>
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
    
    <script src="js/ajoutEleve.js"></script>
</body>

</html>