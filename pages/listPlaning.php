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
                <th scope="col">Heure</th>
                <th scope="col">Date</th>
                <th scope="col">Matiere</th>
              </tr>
            </thead>
            <tbody>
              
              <?php
              // $dates= (int)'08:00:00';
              //   echo "The time is " . date("h:i",$dates);
              
              foreach ($planning->getPlanning() as $var) {
                print_r($planning->getUserById($var['user']));die;
                // echo "\n", $var['heure'], "\t\t", $var['jour'];
                // echo date('l', strtotime((int)$var['jour']));
                // echo strftime("%A ", strtotime( $var['jour'] ));
                
                echo "<tr>";
                echo "<th scope='row' >" . date("h:i", (int)$var["heure"]) . "</th>";
                // echo " <td>".strftime("%A ", strtotime( $var['jour'] ))."</td>";
                $dates = strtotime($var['jour']);
                  if(strtotime($var['jour'])<strtotime("today")){
                    echo " <td class='bg-danger'>".strftime("%A ", strtotime( $var['jour'] ))."</td>";
                  } elseif(strtotime($var['jour'])==strtotime("today")){
                    echo " <td class='bg-primary'>".strftime("%A ", strtotime( $var['jour'] ))."</td>";
                  } else {
                    echo " <td class='bg-success'>".strftime("%A ", strtotime( $var['jour'] ))."</td>";
                  }
                  // if (date('Y-M-D')< $var['jour'] ) {
                    //   echo " <td class='bg-danger'>".strftime("%A ", strtotime( $var['jour'] ))."</td>";
                    // }else{
                      //   echo " <td class='bg-success'>".strftime("%A ", strtotime( $var['jour'] ))."</td>";
                      // }
                      // echo"</td>";
                      echo "<td>" . $var['matiere'] . "</td>";
                      // echo "<td>".$var['user']."</td>";
                      echo "</tr>";
                      $user =$var['user'];
                    }
                    //  $schedule =$planning->getPlanning();
                    // foreach ($planning->getPlanning() as $schedule) {
                      # code...
                      // var_dump($schedule);
                      // foreach ($schedule as $key => $value) {
                        //  echo $value;
              // }
              // }
              // for($i= 0; $i< count($schedule); $i++){
              //   print $schedule[$i];
              // }

              //   foreach ($planning->getPlanning() as $key => $value) {
              //     echo $planning->getPlanning();
              // }

              ?>
                <?
                  foreach ($$planning->getUserById($user) as $value) {
                   
                  }
                echo "<caption>Emploie du temps</caption>";
                ?>
              <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Tab content end-tag -->
  </div>

  <?php
  include 'navbar.php'
  ?>
</body>

</html>