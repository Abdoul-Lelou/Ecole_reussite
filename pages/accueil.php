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



<!-- 
        <div class="d-flex justify-content-center flex-wrap">

            <div id="carouselExampleControls" class="carousel slide d-flex justify-content-center" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="../img/img1.jpeg" class="d-block w-80" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/img3.jpeg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/img4.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/img2.jpg" class="d-block w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div> -->
    </main>
    <div class="row mt-5 d-flex justify-content-center" style=" width: 50%;">
    <article class="col-md-12">
        <h1 class="text-info text-center m-5">  </h1>
        <p class="text-center fs-3 m-5"><strong> <i> l'??cole de la r??ussite est un bon ??tablissement primaire et secondaire qui a pour objectifs principal
                    d'aider les ??l??ves ?? La ma??trise de la langue fran??aise et des premiers ??l??ments de math??matiques
                    pour permettre aux ??l??ves d'acc??der aux outils fondamentaux de la
                    connaissance. Mais aussi nous allons vous transmettre et faire acqu??rir
                    des connaissances, pr??parer ?? la vie professionnelle, ??duquer les futurs adultes ?? ??tre
                    citoyens et ?? vivre ensemble, viser l'??galit?? entre ??l??ves dans la r??ussite ??ducative.</i></strong></p>
    </article>
    </div>
    <footer>
        <?php


        include 'footer.php';
        ?>

    </footer>
    <script src="pages/js/accueil.js"></script>
</body>
</html>
