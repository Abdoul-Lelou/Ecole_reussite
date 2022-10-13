<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>Liste_salaire</title>
</head>

<body>
    <header>
        <?php
        include('navbar.php')
        ?>
    </header>
    <div class="container col-md-12">
        <table class="table border-border-danger  m-2">
            <thead class="thead-dark bg-dark text-light ">
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">matricule</th>
                    <th scope="col">montant</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $db = new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;', 'root', '');
                $sql = $db->query('SELECT u.nom,u.prenom,u.matricule,s.montant FROM user u,`salaire`s WHERE u.salaire = s.id');

                while ($a = $sql->fetch()) {

                    echo ' <tr  scope="row">';
                    echo '<td>' . $a['nom'] . '</td>';
                    echo '<td>' . $a['prenom'] . '</td>';
                    echo '<td>' . $a['matricule'] . '</td>';
                    echo '<td>' . $a['montant'] . '</td>';
                    echo '<td>
                  <button type="button" class="btn btn-outline-success">modifier</button>

                  </td>';

                    echo '</tr>';
                }

                ?>

            </tbody>

        </table>

    </div>

    <footer>
        <?php

        include('footer.php')

        ?>
    </footer>

</body>

</html>