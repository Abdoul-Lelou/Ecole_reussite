



<?php
require "../model/model.php";

$desarchive = new ModelUser();

if (isset($_POST['user'],$_POST['statut'])) {
  $add=$desarchive->addPointage($_POST['user'],$_POST['statut']);
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>List_Planing</title>
</head>

<body>
  <header>
    <?php
    include('navbar.php');
    ?>
  </header>
  <div class="container mt-4">
    <br><br><br>
    <ul id="2" class="nav nav-pills nav-justified">
      <li class="nav-item">
        <a href="#profile" data-target="#profile" data-toggle="pill" class="nav-link active show profile">
          <span>Employer</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#test" data-target="#test" data-toggle="pill" class="nav-link test">
          <span>Eleve</span>
        </a>
      </li>
    </ul>

    <div class="tab-content">

      <div class="tab-pane active show" id="profile">
      <div class="container  col-md-8 ">
        <br>
            <nav class="navbar bg-dark mb-4 sm-2">
                <div class="container ">
                    <a class="navbar-brand text-white bg-dark col-sm-2" href="#">
                        <img src="../img/ecole_reussite.png" alt="Logo" width="30" height="34" class="d-inline-block align-text-top">
                        <span class="col-sm-2">Pointage employer</span>
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

            <form class="row d-flex justify-content-center h-100 col-md-12  g-3 mt-4 bg-light needs-validation col-10 " novalidate action="pointage.php" method="post">


            <div class="col-md-10 mt-4">
                    <label for="input3">Employer</label>
                    <select name="statut" placeholder="employer" class="form-select is-valid p-2" id="validationServer03" required>
                        <option selected disabled value="">Choisir...</option>
                        <option  value="0">Absent</option>
                        <option  value="1">Present</option>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>
                <div class="col-md-10 mt-4">
                    <label for="input3">Employer</label>
                    <select name="user" placeholder="employer" class="form-select is-valid p-2" id="validationServer03" required>
                        <option selected disabled value="">Choisir...</option>
                        <?php
                        $db = new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;', 'root', '');
                        $sql = $db->prepare('SELECT * FROM user WHERE roles="employer"');
                        $sql->execute();

                        //afficher la liste des employer
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

      <div class="tab-pane" id="test">
      <div class="container col-md-8">
           <br>
            <nav class="navbar bg-dark mb-4 sm-2">
                <div class="container ">
                    <a class="navbar-brand text-white bg-dark col-sm-2" href="#">
                        <img src="../img/ecole_reussite.png" alt="Logo" width="30" height="34" class="d-inline-block align-text-top">
                        <span class="col-sm-2">Pointage eleve</span>
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

            <form class="row d-flex justify-content-center h-100 col-md-12  g-3 mt-4 bg-light needs-validation col-10 " novalidate action="pointage.php" method="post">


            <div class="col-md-10 mt-4">
                    <label for="input3">Employer</label>
                    <select name="statut" placeholder="employer" class="form-select is-valid p-2" id="validationServer03" required>
                        <option selected disabled value="">Choisir...</option>
                        <option  value="0">Absent</option>
                        <option  value="1">Present</option>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>
                <div class="col-md-10 mt-4">
                    <label for="input3">Eleve</label>
                    <select name="user" placeholder="employer" class="form-select is-valid p-2" id="validationServer03" required>
                        <option selected disabled value="">Choisir...</option>
                        <?php
                        $db = new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;', 'root', '');
                        $sql = $db->prepare('SELECT * FROM user WHERE roles="eleve"');
                        $sql->execute();

                        //afficher la liste des employer
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
    </div>
  </div>

  <!-- <footer class="mt-4">
    <?php
    include('footer.php')
    ?>
</footer> -->
</body>

</html>

