<?php 
    include('pass/tarifs.php');
    include('pass/abonnes.php');
    include('pass/abonnes2.php');
    include('pass/catch_abo.php');
    include('pass/update.php');
    include('pass/delete.php');
    $updates = updates();
    $delete = delete();
    $tarifs = tarifs();
    $abonnes = abonnes();
    $abonnes2 = abonnes2();
    $catch_abos = catch_abos();
?>
<?php include 'includes/header.php'; ?>

    <div class="container_body">
        <div class="row">

        <!--MDB Tables-->
        <div class="container mt-4">
            <h1 class="card-title pricing-card-title" style="color: #0e8ce4">Abonnements</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <!--Table-->
                    <table class="table table-striped">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>Abonnement</th>
                                <th>Explications</th>
                                <th>Prix</th>
                                <th>Durée</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                            <?php foreach ($tarifs as $tarif): ?>
                                <tr>
                                    <td><?= $tarif['nom']; ?></td>
                                    <td><?= $tarif['resum']; ?></td>
                                    <td><?= $tarif['prix']; ?></td>
                                    <td><?= $tarif['duree_abo']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                    <div class="col-md-12">
                        <h3>Ajouter et/ou modifier :</h3>
                        <form action="pass.php" method="POST">
                            <p>
                                ID :
                                <label for="id"></label><input type="text" name="id" id="id">
                                <select name="id_abos">
                                    <option value="null">Abonnements</option>
                                    <?php foreach($catch_abos as $catch_abo){ ?>
                                    <option value="<?= $catch_abo['id_abo'];?>"><?= $catch_abo['nom'];?></option>
                                    <?php }?>
                                </select>
                                <label for="envoyer"></label><input type="submit" name="submit" id="envoyer">
                            </p>
                        </form>
                                
                        <table class="table table-striped">
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Abonnement</th>
                                <th>Prix</th>
                                <th>Durée</th>
                            </tr>
                            <tbody>
                                <?php foreach ($abonnes as $abonne): ?>
                                <tr>
                                    <td><?= $abonne['nom_f']; ?></td>
                                    <td><?= $abonne['prenom']; ?></td>
                                    <td><?= $abonne['nom_a']; ?></td>
                                    <td><?= $abonne['prix']; ?></td>
                                    <td><?= $abonne['duree_abo']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <h3>Supprimer un abonnement :</h3>
                        <form action="pass.php" method="POST">
                            <p>
                                ID :
                                <label for="id_delete"></label><input type="text" name="id_delete" id="id_delete">
                                <label for="submit"></label><input type="submit" name="submit" id="submit">
                            </p>
                        </form>
                            
                        <table class="table table-striped">
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Abonnement</th>
                                <th>Prix</th>
                                <th>Durée</th>
                            </tr>
                            <tbody>
                            <?php foreach ($abonnes2 as $abonnes): ?>
                            <tr>
                                <td><?= $abonnes['nom_f']; ?></td>
                                <td><?= $abonnes['prenom']; ?></td>
                                <td><?= $abonnes['nom_a']; ?></td>
                                <td><?= $abonnes['prix']; ?></td>
                                <td><?= $abonnes['duree_abo']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>