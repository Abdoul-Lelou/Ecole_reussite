<?php
    // require '../model/model.php';
    require "../model/model.php";

    // if (isset($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['matricule'],$_POST['username'],
    //             $_POST['passwords'],$_POST['roles'],$_POST['tel'],$_POST['email'],$_POST['lieu_naissance'])) {

                                // var_dump($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['matricule'],$_POST['username'],
                                // $_POST['passwords'],$_POST['roles'],$_POST['tel'],$_POST['email'],$_POST['lieu_naissance']);die;

            $requeste = new ModelUser();

            // $requeste->addUser($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],
            //                 $_POST['username'],$_POST['passwords'],$_POST['roles'],$_POST['matricule'], $_POST['lieu_naissance'],
            //                 $_POST['email'],$_POST['tel']);

            // var_dump($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],
            // $_POST['username'],$_POST['passwords'],$_POST['roles'], $_POST['lieu_naissance'],
            // $_POST['niveau']);die;

            // $requeste->ajoutEleve($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],
            //                     $_POST['username'],$_POST['passwords'],$_POST['roles'], $_POST['lieu_naissance'],
            //                     $_POST['niveau']);

    
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inscription</title>
</head>
<body>

    <div class="container d-flex justify-content-center">
        <div class="col-md-8  ">
                <div class=" text text-center mb-2">
                    <h4>INSCRIPTION </h4>
                </div>

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
                        <label for="input4" class="form-label">Matricule</label>
                        <input type="text" name="matricule" onchange='return clkform2()' placeholder="matricule" class="form-control" id="validationServer04" required>
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
                        <input type="text" name="age" onchange="checkAge()"  placeholder="age" class="form-control age" id="validationServer07" required>
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
                    <div class="col-md-6">
                        <label for="input10" class="form-label">Roles</label>
                        <select name="roles" id="roles" class="form-select is-valid"  id="validationServer10" required>
                            <option selected disabled value="">Choisir...</option>
                            <option value="employer" name='role'>Employer</option>
                        </select>
                        <div class="valid-feedback"></div>
                        <div  class="invalid-feedback"></div>
                    </div>
                    <div class="col-md-12">
                        <label for="input11" class="form-label">Lieu_naissance</label>
                        <input type="text" name="lieu_naissance" placeholder="lieu_naissance" class="form-control" id="validationServer11" required>
                        <div class="valid-feedback"></div>
                        <div  class="invalid-feedback">Champ invalide</div>
                    </div>
                    
                    <!-- <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>  -->
                    <div class="row d-flex justify-content-center mt-2">
                        <button type="submit" class="btn btn-success col-3" >
                            <i class="spinOff">S'inscrire</i>
                            <i class="spinOn" style="display: none">
                                <span class="spinner-border spinner-border-sm"  aria-hidden="true"></span>
                                Loading...
                            </i>
                        </button>
                       
                     </div>
        
                    <span class="text text-center mt-2">
                        <p>Vous avez un compte 
                            <a href="connexion.php" style="text-decoration:none;"> connectez-vous</a>
                        </p>
                    </span>
                </form> 

          
            </div>
        </div>
        
        <!-- <div class="row d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-success col-2">S'inscrire</button>
        </div>
        
        <span class="text text-center mt-2">
            <p>Vous avez un compte <a href="connexion.php"> connectez-vous</a></p>
            
        </span> -->

        <script src="js/inscription.js"></script>

</body>
</html>