<?php
require '../model/model.php';

if (isset(
  $_POST['devoir_1'],
  $_POST['devoir2'],
  $_POST['examen'],
  $_POST['matiere'],
  $_POST['eleve'],

)) {

  $requeste = new ModelUser();

  $addnote = $requeste->addNote($devoir_1, $devoir_2, $exemen, $matiere, $eleve,);
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
  <title>Document</title>
</head>

<body>
  <header>
    <?php
    include 'navbar.php';
    ?>

  </header>
  <div class="row g-2 d-flex justify-content-center  mt-5">
    <div class="col-md-4 d-flex justify-content-center mt-5">
      <div class="container mt-5">
        <h1 class="m-5">Ajout Notes</h1>
        <div class="form-floating">

          <input type="number" class="form-control" id="floatingInputGrid">
          <label for="floatingInputGrid">DEVOIR N°1</label>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control" id="floatingInputGrid">
          <label for="floatingInputGrid">DEVOIR N°2</label>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control" id="floatingInputGrid">
          <label for="floatingInputGrid">EXAMEN</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInputGrid">
          <label for="floatingInputGrid">ÉLÉVE</label>
        </div>
        <div class="col-md-12">
          <div class="form-floating">
            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
              <option selected>MATIÉRE</option>
              <option value="1">Français</option>
              <option value="2">Mathématique</option>
              <option value="3">Histoire</option>
              <option value="3">Géographie</option>
              <option value="3">SVT</option>
              <option value="3">physique</option>
              <option value="3">Englais</option>
            </select>
          </div>
        </div>
      </div>

      <footer>
        <?php

        include 'footer.php';

        ?>

      </footer>
</body>

</html>