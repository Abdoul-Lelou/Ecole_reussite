<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="accueil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Accueil</title>
</head>

<body>
    <header>
        <?php

        include 'navbar.php';

        ?>

    </header>
    <main class="m-3 d-flex justify-content-center">


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/img1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/img3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </main>
    <div class="row mt-5 d-flex justify-content-center">
    <article class="col-md-12">
        <p class="text-center fs-3 m-5"> <i> l'école de la réussite est un bon établissement primaire et secondaire qui a pour objectifs principal
                    d'aider les élèves à La maîtrise de la langue française et des premiers éléments de mathématiques
                    pour permettre aux élèves d'accéder aux outils fondamentaux de la
                    connaissance. Mais aussi nous allons les transmettre et faire acquérir
                    des connaissances, préparer à la vie professionnelle, éduquer les futurs adultes à être
                    citoyens et à vivre ensemble, viser l'égalité entre élèves dans la réussite éducative.</i></p>
    </article>
    </div>



    <footer>
    <div class=" bg-dark border-0 mb-auto">
<table class="table text-light border-0">
  
  <tr>
    <th class="border-0">CONTACT</th>
    <th class="border-0">RESEAU SOCIAUX</th>
    
  </tr>
  <tr>
    <td class="border-0"> <img src="../img/tel.jpg" alt="" width="40" height="24"> TEL: 78 422 73 95
      <br> 33 000 33 33</td>
      <td class="border-0"> <a href=""><img src="../img/logo-facebook.png" alt="" width="40" height="24"> FACEBOOK</td></a>
    
  </tr>
  <tr>
  <td class="border-0"> <a href=""> <img src="../img/logo_email.png" alt="" width="40" height="24"> EMAIL:  ecolereussite@gmail.com</td></a>
    <td class="border-0"> <a href=""><img src="../img/Linkedin-Logo.webp" alt=""width="80" height="34"> LINKEDIN</td></a>
  </tr>
</table>
</div>
    </footer>
    <script src="pages/js/accueil.js"></script>
</body>
</html>
