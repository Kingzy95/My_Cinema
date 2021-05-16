<?php
session_start();
?>
<?php include 'includes/header.php'; ?>

<div class="container" style="height: 448px!important">
    <div class="row py-5 mt-4 align-items-center">
        <div class="col-md-6 col-lg-6 ml-auto">
            <form action="#">
                <div class="row">

                    <!-- Email Address -->
                    <div class="input-group col-lg-10 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Adresse email" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-10 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Mot de passe" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-10 mb-4">
                        <a href="#" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Connexion</span>
                        </a>
                    </div>

                </div>
            </form>
        </div>
        <!-- Registeration Form -->
        <div class="col-md-6 col-lg-6 ml-auto">
            <form action="#">
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="firstname" placeholder="Prénom" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Last Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="lastname" placeholder="Nom" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Adresse email" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Mot de passe" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirmez le mot de passe" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <a href="#" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Inscription</span>
                        </a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


    <!--<div class="container_body">
        <div class="row">
            <div class="col-md-2">
                <div class="container_nav">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="films.php">films</a></li>
                        <li><a href="member.php">Membres</a></li>
                        <li><a href="pass.php">Abonnements</a></li>
                        <li><a href="avis.php">Commentaires</a></li>
                    </ul>
                </div>
            </div>--

        <div class="container_formulaire">
            <div class="col-md-12">
                <h1>Membres</h1>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Connexion</h2>
                        <form class="form_members" action="member/connexion.php" method="post">
                            <p>
                                Prenom :
                                <label for="prenom"></label><input type="text" name="prenom" class="prenom" id="prenom" required /><br /><br />
                                Mot de passe :
                                <input type="password" name="motdepasse" class="motdepasse" required/><br /><br />
                                Adresse email :
                                <input type="email" name="email" class="email" required/><br /><br />
                                <input type="submit" name="envoyer" class="envoyer" value="Se connecter" />
                                <?php if(isset($_SESSION['flash'])): ?>
                                    <?php foreach ($_SESSION['flash'] as $type => $message): ?>
                                        <p class="alert alert-<?= $type; ?>">
                                            <?= $message; ?>
                                    <?php endforeach; ?>
                                    <?php unset($_SESSION['flash']); ?>
                                <?php endif; ?>
                            </p>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2>Inscription</h2>
                        <form class="form_members" action="formulaire.php" method="post">
                        <p>
                            Nom :
                            <label for="nom"></label><input type="text" name="nom" class="nom" id="nom" /><br /><br />
                            Prenom :
                            <label for="prenom2"></label><input type="text" name="prenom" class="prenom" id="prenom2" /><br /><br />
                            Mot de passe :
                            <input type="password" name="motdepasse" class="motdepasse"/><br /><br />
                            Retapez votre<br>
                            mot de passe :
                            <input type="password" name="motdepasse2" class="motdepasse2"/><br /><br />
                            Adresse email :
                            <input type="email" name="email" class="email"/><br /><br />
                            Date de naissance :
                            <input type="date" name="naissance" class="naissance"/><br /><br />
                            <input type="submit" name="envoyer" class="envoyer" value="Valider"/>
                        </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>-->

<?php include 'includes/footer.php'; ?>
</body>
</html>