# Ecole_reussite

<div class="col-md-8 ">


            <nav class="navbar bg-dark">
                <div class="container ">
                    <a class="navbar-brand text-white bg-dark pe-none" href="#">
                        <img src="../img/ecole_reussite.png" alt="Logo" width="30" height="15" class="d-inline-block align-text-top">
                        Ajouter un Planning
                    </a>
                    <a href="" class="ml-auto">
                        <?php
                        if (isset($add)) {
                            echo ' 
                                <div id="msg" class="d-flex justify-content-center" role="alert">
                                    <span class="badge bg-success border border-success">Planing enregistré!</span>
                                </div>          
                            ';
                            echo ' 
                            <script>
                                setTimeout(()=>{document.getElementById("msg").remove()},2000);
                            </script>          
                        ';
                        }
                        ?>
                    </a>
                </div>
            </nav>

            <form class="row g-3 mt-4 bg-light d-flex justify-content-center needs-validation" novalidate action="ajoutPlanning.php" method="post">

                <div class="col-md-6 mt-2">
                    <label for="prenom">date</label>
                    <input type="date" name="jour" placeholder="date" class="form-control" id="validationServer01" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="eleve">Eleve</label>
                    <select name="user" id="user" class="form-select is-valid" id="validationServer04" required>
                        <option selected disabled value="">Choisir...</option>
                        <?php
                        $db = new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;', 'root', '');
                        $sql = $db->prepare('SELECT * FROM user WHERE roles="employer"');
                        $sql->execute();

                        while ($donnee = $sql->fetch()) {
                            echo '<option value=' . $donnee['id'] . '>';
                            echo ($donnee['prenom'] . ' ' . $donnee['nom'] . ' | Niveau: ' . $donnee['niveau']);
                            echo '</option>';
                        }
                        ?>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="username">Début</label>
                    <input type="time" name="start" id="heure" onchange="checkStartTime()" placeholder="heure" class="form-control" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                    <div class="invalid-heure" style="display: none;">heure invalide</div>
                </div>

                <div class="col-md-6 mt-2 ">
                    <label for="matiere">matiere</label>
                    <select name="matiere" class="form-select is-valid" id="validationServer03" required>
                        <option selected disabled value="">Choisir...</option>
                        <option value="français" name='sexe'>français</option>
                        <option value="histoire" name='sexe'>histoire</option>
                        <option value="maths" name='sexe'>maths</option>
                        <option value="physique" name='sexe'>physique</option>
                        <option value="chimie" name='sexe'>chimie</option>
                        <option value="geographie" name='sexe'>geographie</option>
                        <option value="anglais" name='sexe'>anglais</option>
                        <option value="svt" name='sexe'>svt</option>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="username">Fin</label>
                    <input type="time" name="end" id="heureEnd" onchange="checkEndTime()" placeholder="heure" class="form-control" required>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                    <div class="invalid-heureEnd" id="end" style="display: none;">heure invalide</div>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="eleve">Classe</label>
                    <select name="user" id="classe" class="form-select is-valid" id="validationServer05" required>
                        <option selected disabled value="">Choisir...</option>
                        <?php
                        $db = new PDO('mysql:host=127.0.0.1;dbname=ecole_reussite;', 'root', '');
                        $sql = $db->prepare('SELECT * FROM classe');
                        $sql->execute();

                        while ($donnee = $sql->fetch()) {
                            echo '<option value=' . $donnee['id'] . '>';
                            echo ($donnee['nom']);
                            echo '</option>';
                        }
                        ?>
                    </select>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">champ invalide</div>
                </div>

                

                <div class="row d-flex justify-content-center mt-2 mb-3 border">
                    <button type="submit" class="btn btn-success col-3">
                        <i class="spinOff">Ajouter</i>
                        <i class="spinOn" style="display: none">
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            Loading...
                        </i>
                    </button>

                </div>

            </form>


        </div>