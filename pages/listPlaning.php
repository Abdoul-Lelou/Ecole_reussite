<?php

require '../model/model.php';

$planning = new ModelUser();

function getDayName($day)
{
  $dayName = date('l', strtotime($day));

  switch ($dayName) {
    case "Monday":
      echo "Lundi";
    case "Tuesday":
      echo "Mardi";
    case "Wednesday":
      echo "Mercredi";
    case "thursday":
      echo "Jeudi";
    case "Friday":
      echo "Vendre";
    case "Saturday":
      echo "Samedi";
    // default:
    //   echo "Date invalide...!";
  }
}

function dateToFrench($date) 
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    // $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    // $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return  str_replace($english_days, $french_days,'' );
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
  <title>List_Planing</title>
</head>

<body>
  <?php
  include 'navbar.php'
  ?>
  <div class="container">
    <!-- Second Nav-menu -->

    <!-- End of second Nav-Menu -->
    <!-- Main Nav-menu -->
    <ul id="2" class="nav nav-pills nav-justified">
      <li class="nav-item">
        <a href="#profile" data-target="#profile" data-toggle="pill" class="nav-link active show profile">
          <span>Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#test" data-target="#test" data-toggle="pill" class="nav-link test">
          <span>Test</span>
        </a>
      </li>
    </ul>
    <!-- End of main Nav-menu -->
    <!-- Tab content -->

    <div class="tab-content">

      <div class="tab-pane active show" id="profile">
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              A list item
              <span class="badge bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              A second list item
              <span class="badge bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              A third list item
              <span class="badge bg-primary rounded-pill">1</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="tab-pane" id="test">
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
                <th scope="col">Matiere</th>
                <th scope="col">Prof</th>
                <th scope="col">Classe</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
              
              <?php
             
              
              foreach ($planning->getPlanning() as $var) {
                
                echo "<tr>";
                
                      $dates = strtotime($var['jour']);
                      if(strtotime($var['jour'])<strtotime("today")){
                        echo " <td class='bg-danger'>".strftime("%A %e %B %Y  ", strtotime( $var['jour'] ))."</td>";
                      } elseif(strtotime($var['jour'])==strtotime("today")){
                        echo " <td class='bg-primary'>".strftime("%A %e %B %Y", strtotime( $var['jour'] ))."</td>";
                      } else {
                        echo " <td class='bg-success'>".strftime("%A %e %B %Y", strtotime( $var['jour'] ))."</td>";
                      }
                      echo "<th scope='row' >" . date("h:i", (int)$var["startTime"]) . "</th>";
                 
                      echo "<td>" . $var['matiere'] . "</td>";
                      foreach ($planning->getUserById($var['user']) as $value) {
                        # code...
                        echo "<td>".$value["prenom"]." ".$value["nom"]."</td>"; 
                      }
                      foreach ($planning->getClasseById($var['classe']) as $value) {
                        # code...
                        echo "<td>".$value["nom"]." ".$value["niveau"]."</td>"; 
                      }
                      echo '<td>
                                <button type="button" class="btn btn-success btn-lg">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </button>
                            </td>'; 
                   "</tr>";
                      
                  }
                    

                  // foreach ($planning->getUserById($user) as $value) {
                   
                  // }
                  echo "<caption>Emploie du temps</caption>";
                ?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Tab content end-tag -->
  </div>

  <?php
  include 'footer.php'
  ?>
</body>

</html>