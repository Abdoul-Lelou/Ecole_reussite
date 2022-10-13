




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
    <header>
    <?php
    include('navbar.php')
    ?>
    </header>

  <div class="container">

    <ul id="2" class="nav nav-pills nav-justified">
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
         
        <table class="table m-2 " >
                    <thead class="thead-dark bg-dark text-light">
                    <tr>
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">age</th>
                        <th scope="col">sexe</th>
                        <th scope="col">email</th>
                        <th scope="col">lieu_naissance</th>
                        <th scope="col">username</th>
                        <th scope="col">password</th>
                        <th scope="col">tel</th>
                        <th scope="col">Action</th>


                        
                    </tr>
                    </thead>
                    <tbody>

                  <?php
                  
                  $db= new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;','root','');
                        $sql=$db->query('SELECT * FROM user WHERE roles ="employer" and etat=0 ');

                        while($a = $sql->fetch()){
                            
                                echo ' <tr  scope="row">';
                                    echo '<td>'.$a['nom'].'</td>';
                                    echo '<td>'.$a['prenom'].'</td>';
                                    echo '<td>'.$a['age'].'</td>';
                                    echo '<td>'.$a['sexe'].'</td>';
                                    echo '<td>'.$a['email'].'</td>';
                                    echo '<td>'.$a['lieu_naissance'].'</td>';
                                    echo '<td>'.$a['username'].'</td>';
                                    echo '<td>'.$a['passwords'].'</td>';
                                    echo '<td>'.$a['tel'].'</td>';
                                    echo "<td>
                                    <form action='mod_employer.php' method='post'> 
                                    <input type='hidden' name='id_em' value=".$a["id"].">
                                    <button type='submit' class='btn btn-outline-danger'>archiver</button>
                                    <button type='submit' class='btn btn-outline-primary'>modifier</button>
                                    </form>
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
         
        <table class="table m-2 " >
                    <thead class="thead-dark bg-dark text-light">
                    <tr>
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">age</th>
                        <th scope="col">sexe</th>
                        <th scope="col">email</th>
                        <th scope="col">lieu_naissance</th>
                        <th scope="col">username</th>
                        <th scope="col">password</th>
                        <th scope="col">tel</th>
                        <th scope="col">Action</th>


                        
                    </tr>
                    </thead>
                    <tbody>

                  <?php
                  
                  $db= new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;','root','');
                        $sql=$db->query('SELECT * FROM user WHERE roles ="employer" and etat=1 ');

                        while($a = $sql->fetch()){
                            
                                echo ' <tr  scope="row">';
                                    echo '<td>'.$a['nom'].'</td>';
                                    echo '<td>'.$a['prenom'].'</td>';
                                    echo '<td>'.$a['age'].'</td>';
                                    echo '<td>'.$a['sexe'].'</td>';
                                    echo '<td>'.$a['email'].'</td>';
                                    echo '<td>'.$a['lieu_naissance'].'</td>';
                                    echo '<td>'.$a['username'].'</td>';
                                    echo '<td>'.$a['passwords'].'</td>';
                                    echo '<td>'.$a['tel'].'</td>';
                                    echo "<td>
                                    <form action='mod_employer.php' method='post'>
                                    <input type='hidden' name='id_emd' value=".$a["id"].">
                                    <button type='submit' class='btn btn-outline-success'>desarchiver</button>

                                    </td>";

                                    


                                    
                                echo '</tr>';
                        }
                  
                  ?>

                    </tbody>
                    </table>

             
        </div>
      </div>
    </div>
  </div>

  <footer>
    <?php 

        include('footer.php')
    
    ?>
  </footer>

</body>

</html>