<!doctype html>
<html lang="en" data-theme="light">
<head>
    <?php include 'include/head.php' ?>
    <title>Accueil</title>
</head>
<script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>

    <style>
        .hero.is-large .hero-body {
            padding-bottom: 0;
            padding-top: 10rem;
        }
        .hero figure {
            height: 0;
            padding-bottom: 75%;
            overflow: hidden;
        }
        figure.image {
            padding-left: 50px;
            padding-right: 50px;
        }
        .bg-white {
            background-color: #ffffff;
        }
        .bg-light {
            background-color: #faf6fb;
        }
        .media-left {
            padding-left: 15px;
        }
        .media-left .icon {
            margin-top: 15px;

        }

        .media-content {
            padding-left: 25px;
        }

        .media {
            background-color: #ffffff;
            padding: 25px;
        }

        .section {
            padding: 7rem 5rem;
        }

        .content h1 {
            margin-bottom: 2em;
        }

        #stn-download {
            color: #ffffff;
            background-image: linear-gradient( 135deg, rgba(60, 8, 118, 0.8) 0%, rgba(250, 0, 118, 0.8) 100%);
        }

        .hero.is-landing {
            color: #ffffff;
            background-image: linear-gradient( 135deg, rgba(60, 8, 118, 0.8) 0%, rgba(250, 0, 118, 0.8) 100%);
        }

        .hero.is-landing * {
            color: #ffffff;
        }

        #stn-download h1 {
            color: #ffffff;
        }

        .button.button-store {
            border-radius: 3px;
            background: #FFF;
            box-shadow: 0px 9px 32px 0px rgba(0, 0, 0, 0.26);
            font-size: 14px;
            font-weight: 500;
            color: #633991;
            margin: 0.5rem;
            padding: 0.7rem 1.6rem;
            line-height: 1.8;
            height: auto;
            text-transform: uppercase;
            transition: all 0.3s ease;

            display: inline-block;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
        }

        .button.button-store:hover {
            color: #000000;
            background-color: #faf6fb;
        }

        .button.button-store img {
            margin-right: 0.4rem;
            vertical-align: text-bottom;
        }
    </style>
<body>
    <section class="hero is-landing is-large">
<?php include 'include/nav.php' ?>
<script src="./js/light-dark-mode.js"></script>


    <div class="content-wrapper">
    
    <div class="hero-body">
            <div class="container has-text-centered">

                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        <h1 class="title is-1">
                        PCBuilderHub
                        </h1>
                        <h2 class="subtitle is-4">
                            Découvrez l'univers ultime de la personnalisation de PC gamer.
                        </h2>

                        <figure class="image">
                            <img src="img/pc2.png" alt="" width="768">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="has-background-light-light">
        <div class="container section">
            <div class="content has-text-centered">
                <h1>À Propos de Nous</h1>
            </div>

            <nav class="columns">
                <div class="column has-text-centered">
                    <article class="media has-background-light-light">
                        <figure class="media-left">
                            <span class="icon has-text-danger">
                                <i class="fas fa-cog fa-3x"></i>
                            </span>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <h4 class="heading"><strong>Personnalisez votre PC</strong></h4>
                                <p>Utilisez notre outil de configuration pour choisir chaque composant de votre futur PC. Que vous soyez un novice ou un expert, notre guide interactif vous aidera à créer le PC parfait.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="column has-text-centered">
                    <article class="media has-background-light-light">
                        <figure class="media-left">
                            <span class="icon has-text-danger">
                                <i class="fas fa-cog fa-3x"></i>
                            </span>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <h4 class="heading"><strong>Guides et Tutoriels</strong></h4>
                                <p>Apprenez à monter, optimiser et entretenir votre PC gamer grâce à nos guides détaillés et nos tutoriels vidéo. De la sélection des composants à l'installation, nous vous accompagnons à chaque étape.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="column has-text-centered">
                    <article class="media has-background-light-light">
                        <figure class="media-left">
                            <span class="icon has-text-danger">
                                <i class="fas fa-cog fa-3x"></i>
                            </span>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                    <h4 class="heading"><strong>Catalogue </strong></h4>
                                    <p>Parcourez notre vaste sélection de composants de haute performance. Processeurs, cartes graphiques, mémoires RAM, boîtiers et plus encore, tous sélectionnés pour les gamers exigeants.
                                    </p>
                            </div>
                        </div>
                    </article>
                </div>
            </nav>
        </div>
    </section>

    <section class="has-background-white-light">
        <div class="container section">
            <div class="columns is-vcentered">
                <div class="column">
                    <figure class="image">
                        <img src="img/pc2.png" alt="">
                    </figure>
                </div>
                <div class="column ">
                        <div class="content">
                            <h1>Partenariats et Affiliations</h1>
                            <p>Découvrez nos partenariats avec les plus grandes marques de l'industrie du gaming et de la technologie.  </p>

                            <a href="front/" class="button is-danger">Decouvrir</a>
                        </div>

                </div>
            </div>
        </div>
    </section>

    <section class="has-background-white-light">
        <div class="container section">
            <div class="content has-text-centered">
                <h1>Foire Aux Questions (FAQ)</h1>
            </div>

            <div class="columns">
                <div class="column is-half">
                    <div class="title is-4">Blog</div>
                    <p>Restez informé des dernières actualités du monde du gaming et de la technologie Lisez nos articles sur les nouvelles sorties de jeux et les tendances technologiques.</p>
                </div>

                <div class="column is-half">
                    <div class="title is-4">Rejoignez notre Communauté</div>
                    <p>Partagez vos expériences, astuces et configurations avec d'autres passionnés de gaming. Rejoignez notre forum et participez à des discussions animées, des concours et des événements en ligne.</p>
                </div>
            </div>

            <div class="columns">
                <div class="column is-half">
                    <div class="title is-4">Promotions et Offres Spéciales</div>
                    <p>Profitez de nos promotions exclusives et de nos offres spéciales sur une sélection de composants et de configurations PC. Ne manquez pas les meilleures affaires pour améliorer votre setup gamer.</p>
                </div>

                <div class="column is-half">
                    <div class="title is-4">Programme de Fidélité</div>
                    <p> Rejoignez notre programme de fidélité et accumulez des points à chaque achat. Échangez vos points contre des réductions, des cadeaux exclusifs et des avantages réservés aux membres fidèles.</p>
                </div>
            </div>

        </div>
    </section>


    <section id="stn-download">
        <div class="container section has-text-centered">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">

                    <h1 class="title is-2">Téléchargez notre Application </h1>
                    <p>Téléchargez notre Application de Suivi de Livraison.</p>

                    <a href="#" class="button button-store">
                        <img src="img/appleicon.png" alt="icon"> Apple Store
                    </a>

                    <a href="#" class="button button-store">
                        <img src="img/playicon.png" alt="icon"> Google play
                    </a>
                </div>
            </div>

        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    Projet realiser avec
                    <span class="icon has-text-danger">
                        <i class="fas fa-heart"></i>
                    </span>
                    par <a href="https://github.com/ziadlachguer">Ziad Lachguer</a>
                    
                </p>
            </div>
        </div>
    </footer>
</div>



</body>
</html>