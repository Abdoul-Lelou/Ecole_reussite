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
  <title>List_Planing</title>
</head>

<body>
  <header>
    <?php
    require "../model/model.php";
    include('navbar.php');
    ?>
  </header>
  <div class="container mt-4">
    <br><br><br>
    <ul id="2" class="nav nav-pills nav-justified mt-4">
      <li class="nav-item">
        <a href="#profile" data-target="#profile" data-toggle="pill" class="nav-link active show profile">
          <span>Actif</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#test" data-target="#test" data-toggle="pill" class="nav-link test">
          <span>Archive</span>
        </a>
      </li>
    </ul>

    <div class="tab-content">

      <div class="tab-pane active show" id="profile">
        <div class="col-md-12">

          <table class="table m-2 ">
            <thead class="thead-dark bg-dark text-light">
              <tr>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">age</th>
                <th scope="col">sexe</th>
                <th scope="col">lieu_naissance</th>
                <th scope="col">classe</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>

              <?php

              $db = new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;', 'root', '');
              $sql = $db->query('SELECT * FROM user WHERE roles ="eleve" and etat=0 ');

              while ($a = $sql->fetch()) {

                echo ' <tr  scope="row">';
                echo '<td>' . $a['nom'] . '</td>';
                echo '<td>' . $a['prenom'] . '</td>';
                echo '<td>' . $a['age'] . '</td>';
                echo '<td>' . $a['sexe'] . '</td>';
                echo '<td>' . $a['lieu_naissance'] . '</td>';

                $class = new ModelUser();
                $eleve = $class->getClasseByUserId($a['id']);
                foreach ($eleve as $value) {
                  # code...
                  echo '<td>' . $value['nom'] . '</td>';
                }
                // die;
                echo "<td>
                                <form action='modification.php' method='post'>
                                <input type='hidden' name='id' value=" . $a["id"] . ">
                                <button type='submit' class='btn btn-outline-danger'>
                                  <span class='fas fa-edit' aria-hidden='true'></span>
                                </button>
                              </form>
                                <button type='button' class='btn btn-outline-primary'>modifier</button>
                                </td>";





                echo '</tr>';
              }

              ?>
            </tbody>
          </table>

        </div>
      </div>

      <div class="tab-pane" id="test">
        <div class="col-md-12">

          <table class="table m-2 ">
            <thead class="thead-dark bg-dark text-light">
              <tr>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">age</th>
                <th scope="col">sexe</th>
                <th scope="col">lieu_naissance</th>
                <th scope="col">classe</th>
                <th scope="col">Action</th>





              </tr>
            </thead>
            <tbody>

              <?php

              $db = new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;', 'root', '');
              $sql = $db->query('SELECT * FROM user WHERE roles ="eleve" and etat=1 ');

              while ($a = $sql->fetch()) {

                echo ' <tr  scope="row">';
                echo '<td>' . $a['nom'] . '</td>';
                echo '<td>' . $a['prenom'] . '</td>';
                echo '<td>' . $a['age'] . '</td>';
                echo '<td>' . $a['sexe'] . '</td>';
                echo '<td>' . $a['lieu_naissance'] . '</td>';

                $class = new Modeluser();

                $eleve = $class->getClasseByUserId($a['id']);
                foreach ($eleve as $value) {

                  echo '<td>' . $value['nom'] . '</td>';
                }

                echo "<td> 
                                
                                <form action='desarchive.php' method='post'>
                                  <input type='hidden' name='id' value=" . $a["id"] . ">
                                  <button type='submit'class='col-sm-2 btn btn-outline-success'>desarchiver</button>
                                </form>
                                </td>";
              }

              ?>

            </tbody>
          </table>


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