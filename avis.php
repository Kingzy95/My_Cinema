<?php 
   include('avis/id.php');
   include('avis/insert.php');
   include('avis/last_com.php');
   $last_com = last_com();
   $insert_avis = insert_avis();
   $ids = id();
?>
<?php include 'includes/header.php'; ?>

    <div class="container">
        <div class="row">

        <div class="container">
            <div class="col-md-12">
                <h1 class="card-title pricing-card-title" style="color: #0e8ce4">Commentaires</h1>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="card-title pricing-card-title text-center" style="color: #0e8ce4; font-weight: lighter">Ajouter votre avis !</h2>
                        <form action="avis.php" method="POST">
                            <p>
                                <input class="form-control" type="text" name="id" placeholder="votre id" required><br>
                                <input class="form-control" type="text" name="id_confirm" placeholder="Retaper votre id" required><br>
                                <input class="form-control" type="text" name="film" placeholder="Titre du film" required><br>
                                <textarea class="form-control" name="avis" rows="5" cols="110" placeholder="Votre avis" required></textarea><br>
                                <input class="btn-primary" type="submit" name="submit">
                            </p>
                        </form>
                    </div>

                    <!--<div class="col-md-12">
                        <h3>Derniers Commentaires de films :</h3>
                            
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Affiche</th>
                                <th>Film</th>
                                <th>Prénom</th>
                                <th>Commentaire</th>
                                <th>Date</th>
                            </tr>
                            <tbody>

                            <?php foreach ($ids as $id): ?>
                            <tr>
                                <td><img src="./films/affiche.jpg" alt="affiches de films"></td>
                                <td><?= $id['titre']; ?></td>
                                <td><?= $id['prenom']; ?></td>
                                <td><?= $id['avis']; ?></td>
                                <td><?= $id['date']; ?></td>
                            </tr>
                            <?php endforeach; ?>

                            <?php foreach ($last_com as $last): ?>
                            <tr>
                                <td><img src="https://img.pixers.pics/pho_wat(s3:700/FO/57/99/10/26/700_FO57991026_7b1a1aef05a58e1dbd8fe8b59dec0ff3.jpg,700,700,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,650,jpg)/stickers-retro-affiche-cinema-vecteur.jpg.jpg" alt="affiches de films"></td>
                                <td><?= $last['titre']; ?></td>
                                <td><?= $last['prenom']; ?></td>
                                <td><?= $last['avis']; ?></td>
                                <td><?= $last['date']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>-->
                </div>
            </div>
        </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>