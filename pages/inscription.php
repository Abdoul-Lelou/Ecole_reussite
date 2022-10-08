<?php
    require "../model/model.php";



    if (isset($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['username'],
                $_POST['passwords'],$_POST['tel'],$_POST['email'],$_POST['lieu_naissance'])) {

                                

            $nom = trim($_POST['nom']);
            $prenom = trim($_POST['prenom']);
            $age= trim($_POST['age']);
            $sexe= trim($_POST['sexe']);
            $roles= 'employer';
            $username= trim($_POST['username']);
            $passwords= trim($_POST['passwords']);
            $email= trim($_POST['email']);
            $lieu_naissance= ltrim($_POST['lieu_naissance']);
            $tel= trim($_POST['tel']);

            $requeste = new ModelUser();

            $matricule = $requeste->generateMatricule();

         
            $requeste->addUser($nom,$prenom,$age,$sexe,$username,$passwords,$roles,$matricule, $lieu_naissance,$email,$tel);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inscription</title>
</head>
<body>

    <div class="container d-flex justify-content-center">
        <div class="col-md-8  mt-4">

                <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand text text-center user-select-none" href="#">
                        <img src="../img/ecole_reussite.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        INSCRIPTION
                        </a>
                    </div>
                </nav>

                <form class="row g-1 d-flex justify-content-center no-wrap m-2  bg-light needs-validation" novalidate action="inscription.php" method="post" >
                    <div class="col-md-6 ">
                        <label for="input1" class="form-label">Nom</label>
                        <input type='text' name='nom' placeholder="nom" class="form-control" id="validationServer01" required>
                        <div class="valid-feedback" id="validationServer01"></div>
                        <div  class="invalid-feedback" id="validationServer01">Champ invalide</div>
                    </div>
                    <div class="col-md-6">
                        <label for="input2" class="form-label">Prenom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="prenom" id="validationServer02" required>
                        <div class="valid-feedback"> </div>
                        <div  class="invalid-feedback">Champ invalide</div>
                    </div>
                   
                    <div class="col-md-6">
                        <label for="input3" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email" id="validationServer03" required>
                        <div class="valid-feedback"></div>
                        <div  class="invalid-feedback">Champ invalide</div>
                    </div>
                    <div class="col-md-6">
                        <label for="input4" class="form-label">Lieu_naissance</label>
                        <input type="text" name="lieu_naissance" onchange='return clkform2()' placeholder="lieu_naissance" class="form-control" id="validationServer04" required>
                        <div class="valid-feedback"></div>
                        <div  class="invalid-feedback">Champ invalide</div>
                    </div>
                    <div class="col-md-6">
                        <label for="input5" class="form-label">Username</label>
                        <input type="text" name="username" placeholder="username" class="form-control" id="validationServer05" required>
                        <div class="valid-feedback"></div>
                        <div  class="invalid-feedback">Champ invalide</div>
                    </div>
                    <div class="col-md-6">
                        <label for="input6" class="form-label">Password</label>
                        <input type="password" class="form-control" name="passwords" placeholder="password" id="validationServer06" required>
                        <div class="valid-feedback"></div>
                        <div  class="invalid-feedback">Champ invalide</div>
                    </div>
                    <div class="col-md-6">
                        <label for="input7" class="form-label">Age</label>
                        <input type="text" name="age" onchange="checkAge()" placeholder="age" class="form-control age" id="validationServer07" required>
                        <div class="valid-feedback"></div>
                        <div  class="invalid-feedback">Champ invalide</div>
                        <div  class="invalid-age" style="display: none;">Age invalide</div>
                    </div>
                    <div class="col-md-6">
                        <label for="input8" class="form-label">Tel</label>
                        <input type="tel" name="tel" onchange="checkTel()" placeholder="tel" class="form-control" id="validationServer08" required>
                        <div class="valid-feedback"></div>
                        <div  class="invalid-feedback">Champ invalide</div>
                        <div  class="invalid-tel" style="display: none;">Tel invalide</div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="input9" class="form-label">Sexe</label>
                        <select name="sexe" id="roles" class="form-select is-valid" id="validationServer10" required>
                            <option selected disabled value="">Choisir...</option>
                            <option value="m" name='sexe'>M</option>
                            <option value="f" name='sexe'>F</option>
                        </select>
                        <div class="valid-feedback"></div>
                        <div  class="invalid-feedback"></div>
                    </div>
                   
                    <div class="row d-flex justify-content-center mt-2">
                        <button type="submit" class="btn btn-success col-3" onclick="hideMsg()">
                            <i class="spinOff">S'inscrire</i>
                            <i class="spinOn" style="display: none">
                                <span class="spinner-border spinner-border-sm"  aria-hidden="true"></span>
                                Loading...
                            </i>
                        </button>
                       
                     </div>
        
                    <span class="text text-center mt-2">
                        <p>Vous avez un compte?
                            <a href="../index.php" style="text-decoration:none;"> connectez-vous</a>
                        </p>
                    </span>
                </form> 

          
            </div>
        </div>

        <script src="js/inscription.js"></script>


</body>
</html>