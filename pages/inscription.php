<?php
    require '../model/model.php';

    if (isset($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['matricule'],$_POST['username'],
                $_POST['passwords'],$_POST['roles'],$_POST['tel'],$_POST['email'],$_POST['lieu_naissance'],
                        $_POST['niveau'],$_POST['salaire'])) {


            $requeste = new ModelUser();

            $requeste->addUser($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],
                            $_POST['username'],$_POST['passwords'],$_POST['roles'],$_POST['matricule'], $_POST['lieu_naissance'],
                            $_POST['email'],$_POST['niveau'],$_POST['tel']);

    
    }
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

    <div class="container border border-secondary d-flex justify-content-center">
        <div class="col-md-8">
                <div class="row  text text-center">
                    <h4>INSCRIPTION </h4>
                </div>

                <form action="inscription.php" method="post" class="form-control-lg">
                <fieldset class="row mb-3">
                <div class="row d-flex justify-content-center">
                    
                    <input type='text' name='nom' placeholder="nom" class="col-5 m-2">
                    <input type="text" name="prenom" placeholder="prenom" class="col-5 m-2">
                    <input type="text" name="age" placeholder="age" class="col-5 m-2">

                    <select name="sexe" id="sexe" class="col-5 m-2">
                        <option selected='select'>Sexe</option>
                        <option value="m" name='sexe'>M</option>
                        <option value="f" name='sexe'>F</option>
                    </select>

                </div>
                <div class="row d-flex justify-content-center">
                    <input type="text" name="matricule" placeholder="matricule" class="col-5 m-2">
                    <input type="text" name="username" placeholder="username" class="col-5 m-2">
                    <input type="password" name="passwords" placeholder="passwords" class="col-5 m-2">
                    <select name="roles" id="roles" class="col-5 m-2">
                        <option selected='select'>Roles</option>
                        <option value="admin" name='role'>Admin</option>
                        <option value="employer" name='role'>Employer</option>
                        <option value="eleve" name='role'>Eleve</option>
                    </select>
                </div>

                <div class="row d-flex justify-content-center">
                    <input type="email" name="email" placeholder="email" class="col-5 m-2">
                    <input type="tel" name="tel" placeholder="tel" class="col-5 m-2">
                    <input type="text" name="niveau" placeholder="niveau" class="col-5 m-2">
                    <input type="text" name="lieu_naissance" placeholder="lieu_naissance" class="col-5 m-2">
                </div>
                
            
                

                    <div class="row d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-success col-2">S'inscrire</button>
                    </div>
                    
                    <span class="text text-center mt-2">
                        <p>Vous avez un compte <a href="connexion.php"> connectez-vous</a></p>
                        
                    </span>


                </form>
            </div>
    </div>
    
</body>
</html>
