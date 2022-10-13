<?php

require '../model/model.php';

  $planning = new ModelUser();

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
      include 'navbar.php'
      ?>
  </header>

  <br><br><br>
  <div class="container">

  <div class="col-md-12 mt-4">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
                <th scope="col">Matiere</th>
                <th scope="col">Prof</th>
                <th scope="col">Classe</th>
                <!-- <th scope="col">Action</th> -->

              </tr>
            </thead>
            <tbody>
              
              <?php
             
              
              foreach ($planning->getPlanning() as $var) {
                
                echo "<tr>";
                
                      $dates = strtotime($var['jour']);
                      if(strtotime($var['jour'])<strtotime("today")){
                        echo " <td class='bg-danger border'>".strftime("%A %e %B %Y  ", strtotime( $var['jour'] ))."</td>";
                      } elseif(strtotime($var['jour'])==strtotime("today")){
                        echo " <td class='bg-primary'>".strftime("%A %e %B %Y", strtotime( $var['jour'] ))."</td>";
                      } else {
                        echo " <td class='bg-success'>".strftime("%A %e %B %Y", strtotime( $var['jour'] ))."</td>";
                      }
                      echo "<th scope='row' >" .$var["startTime"] . "</th>";
                
                      echo "<td>" . $var['matiere'] . "</td>";
                      foreach ($planning->getUserById($var['user']) as $value) {
                        
                        echo "<td>".$value["prenom"]." ".$value["nom"]."</td>"; 
                      }
                      foreach ($planning->getClasseById($var['classe']) as $value) {
                       
                        echo "<td>".$value["nom"]."</td>"; 
                      }
                      // echo '<td>
                      //       <a href="editPlanning.php?id='.$value['id'].'">
                      //           <button type="button" class="btn btn-outline-success" title="modifier">
                      //               <span class="fas fa-edit" aria-hidden="true"></span>
                      //           </button>
                      //       </td>
                      //       </a> ';
                   "</tr>";
                      
                  }
                    
                  echo "<caption>Emploie du temps</caption>";
                ?>
              
            </tbody>
          </table>
        </div>
    
  </div>

  <!-- <footer style="margin-bottom: 10rem;" class="border">
  <?php
  include 'footer.php'
  ?>
  </footer> -->
</body>

</html>