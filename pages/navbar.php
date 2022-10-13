<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>page d'accueil</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <img class="m-1" src="../img/ecole_reussite.png" width="100" height="60">
  <div class="container-fluid d-flex justify-content-center text-light">
<div class="d-flex justify-content-center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light text-uppercase" aria-current="page" href="accueil.php">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <?php
            if (isset($_SESSION['roles'])) {
              if($_SESSION['roles']=='admin'){
                echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="text-light text-uppercase">Fonctionnalités </span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="ajoutEleve.php">Ajouter un éléve</a></li>
                        <li><a class="dropdown-item" href="list_Eleve.php">Liste users</a></li>
                        <li><a class="dropdown-item " href="ajoutPlanning.php"> Ajouter un Planning</a></li>
                        <li><a class="dropdown-item" href="listPlaning.php">List Planning</a></li>
                        <li><a class="dropdown-item " href="ajoutPlanning.php"> Ajouter un Planning</a></li>
                        <li><a class="dropdown-item " href="#"></a></li>
                      </ul>';
                    }
                  }
              ?>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="text-light text-uppercase">Compte</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item " href="../index.php">Se déconnecter</a></li>
            <?php if (isset($_SESSION['roles'])) {
              if ($_SESSION['roles'] == 'admin') {
                echo'
                    <li><a class="dropdown-item " href="inscription.php">Inscrire employer</a></li> 
                  ';
                }
              # code...
            } ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </div>
</nav>
</body>
</html>