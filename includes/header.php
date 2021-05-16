<!DOCTYPE html>
<html lang="fr">
<head>
    <title>My Cinema</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>

<div class="super_container">
    <!-- Header -->
    <header class="header">
        <!-- Header Main -->
        <div class="header_main">
            <div class="container">
                <div class="row" style="justify-content: ">
                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo">
                                <a href="index.php">my cinema</a>
                            </div>
                        </div>
                    </div>
                    <!-- Search -->
                    <div class="col-lg-8 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="films.php" method="post" class="header_search_form clearfix"> 
                                        <input type="search" id="recherche" name="motclee" required="required" class="header_search_input" placeholder="Film, genre, distributeur, membre...">
                                        <button type="submit" name="submit" class="header_search_button trans_300" value="Submit">
                                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt="">
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Wishlist -->
                    <div class="col-lg-2 top_bar_content ml-auto col-12 order-lg-2 order-3 text-lg-left">
                        <div class="top_bar_menu">
                            <ul class="standard_dropdown top_bar_dropdown">
                                <li style="padding-top: 15px;"> 
                                    <a href="#" style="font-weight: 700; color: #0e8ce4">Menu<i class="fa fa-fw fa-bars"></i>
                                    </a>
                                    <ul>
                                        <li><a href="films.php">Films</a></li>
                                        <li><a href="pass.php">Abonnement</a></li>
                                        <li><a href="member.php">Membres</a></li>
                                        <li><a href="avis.php">Avis</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Main Navigation -->
        <!-- Menu -->
    </header>

</div>