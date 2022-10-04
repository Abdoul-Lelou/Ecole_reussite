<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
// include "../model/model.php";
// $model = new ModelUser();
// $nom= $_POST["nom"];
// $prenom= $_POST["prenom"];
// $username= $_POST["username"];
// $password= $_POST["password"];
// $age= $_POST["age"];
// $sexe= $_POST["sexe"];
// $niveau= $_POST["niveau"];
// $lieudenaissance= $_POST["lieu de naissance"];

// $modeluser->ajoutEleve($om,$prenom)
 ?>
<body>
   
        <h2>ajoutEleve</h2>
        <div id="formulaire">
        <form class="needs-validation" action="" method="POST">
            <label for="nom">nom</label>
            <input type="text" name="nom" placeholder="nom" class="form-control">
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">champ invalide</div>

            <label for="prenom">prenom</label>
            <input type="text" name="prenom" placeholder="prenom" class="form-control">
            <div id="valid-feedback"></div>
            <div id="invalid-feedback">champ invalide</div>

            <label for="username">username</label>
            <input type="text" name="username"placeholder="username" class="form-control">
            <div id="valid-feedback"></div>
            <div id="invalid-feedback">champ invalide</div>

            <label for="password">password</label>
            <input type="text" name="password" placeholder="password" class="form-control">
            <div id="valid-feedback"></div>
            <div id="invalid-feedback">champ invalide</div>

            <label for="age">age</label>
            <input type="text" name="age" placeholder="age" class="form-control">
             <div id="valid-feedback"></div>
             <div id="invalid-feedback"></div>

            <label for="sexe">sexe</label>
            <input type="text" name="sexe" placeholder="sexe" class="form-control">
            <div id="valid-feedback"></div>
            <div id="invalid-feedback">champ invalide</div>

            <label for="niveau">niveau</label>
            <input type="text" name="niveau" placeholder="niveau" class="form-control">
            <div id="valid-feedback"></div>
            <div id="invalid-feedback">champ invalide</div>

            <label for="lieu de naissance">lieu de nassance</label>
            <input type="text" name="lieu de naissance" placeholder="lieu de naissance" class="form-control">
            <div id="valid-feedback"></div>
             <div id="invalid-feedback">champ invalide</div>
            <button type="submit">ajouter</button>
        </form>
        </div>
        
   
    <script src="ajoutEleve.js"></script>
</body>
</html>
