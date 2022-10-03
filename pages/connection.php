 <?php
    require '../model/model.php';

    if (isset($_POST['username'], $_POST['passwords'])) {
        $requeste = new ModelUser();
        $username = $_POST['username'];
        $passwords = $_POST['passwords'];

        $requeste->connecter($username, $passwords);
    }
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <title>Page CONNEXION</title>
 </head>

 <body>
     <!-- class="bg-image" style="background-image: url(https://media-files.abidjan.net/photo/photoecole.jpg)" -->

     <div class=" container d-flex justify-content-center mt-5  ">
         <div class="col-md-8 mt-5">
             <!-- <legend class=" text-center m-5">CONNEXION</legend> -->

             <div class="d-flex justify-content-center mt-5 ">

                 <form action="" method="post" class="row g-2 d-block bg-light col-md-8">

                     <nav class="navbar navbar-dark bg-dark">
                         <div class="container-fluid">
                             <a class="navbar-brand" href="#">
                                 <!-- <img src="" alt="" width="40" height="24"> -->
                                 <span class="text-center"> CONNEXION </span>
                             </a>
                         </div>
                     </nav>
                     <div class="col-md-12 p-3">
                         <label for="input1">Username</label>
                         <input class="form-control " type='text' name='username' placeholder="nom d'utilisateur">
                     </div>

                     <div class="col-md-12 p-3 ">
                         <label for="input2">Password</label>
                         <input class="form-control " type="password" name="passwords" placeholder="mot de passe">
                     </div>

                     <div class="row d-flex justify-content-center mt-2">
                         <button type="submit" onclick="return btnLoad()" class="btn btn-success col-3">
                             <i class="spinOff">Connexion</i>
                             <i class="spinOn" style="display: none">
                                 <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                 Loading...
                             </i>
                         </button>

                     </div>

                     <a class="color-success" href="inscription.php">S'inscrire</a>
                 </form>
             </div>
         </div>

     </div>
     <script src="js/connection.js"></script>
 </body>

 </html>