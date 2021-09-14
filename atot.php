<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Owl carousel-->
    <link rel="stylesheet" href="scss/owl.carousel.min.css">
    <link rel="stylesheet" href="scss/owl.theme.default.min.css">

    <link rel="stylesheet" href="scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>A Tale of Two | Robin Balatbat</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <header>
        <?php include("include/nav.php");?>
    </header>

    <?php 
        $headertext = 'A Tale of Two';
        include("include/banner.php")
    ?>
    <div class="clearfix"></div>

    <main>
        <div class="main-padding">
        <div class="container main-grid">
                <section class="sideleft">
                    <h2> My Project </h2>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What started out as a simple class project has turned into a full-fledged game concept that I intend to see through all the way until the end.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A Tale of Two is an action-adventure 2D metroidvania game about a god and human who must work together to restore balance to a broken world. It is currently being developed in GameMaker Studio 2 by myself.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The world of A Tale of Two is one full of strife and magic. A war rages between two noble courts after centuries of bad blood. The dead refuses to die and haunt the realm, spreading their corruption wherever they go. Worst of all, almost all of the gods have died and those that remained are weakened.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You play as Verdali, the newest vessel for the God of Chaos. After losing your memories, you must travel through the world and restore the balance. Fight off great beasts, explore rich environments, and uncover plenty of secrets about the world and yourself.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I will keep you up to date on the progress through the Discord server linked below. But until the full game is released, check out the current prototype of the game that is available on Itch.io right now!
                        <br>
                        The Password for the Prototype is AToT
                    </p>
                </section>
                <div class="sideright">
                    <img src="images/FinalImages/gameart-5.png" alt="Logo for A Tale of Two" height="300px">
                    <a class="button btn-block" href="https://discord.gg/4TUanvBeuX">Join the Conversation on Discord Now</a>
                    <a class="button btn-block" href="https://offdragon.itch.io/a-tale-of-two">Check out the Prototype on Itch.io</a>
                </div>
            </div>

            <div class="container main-grid">
                <div class="sideleft">
                    <br>
                    <h2>Concept Art</h2>
                    <p> Working on AToT has been an amazing experience thus far, and I am incredibly proud of the assets I have created for the game. Check them out below. </p>
                </div>
            </div>

            <div class="carousel-container">
                
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <section class="card card-body game-item">
                            <img src="images/FinalImages/gameart-7thumb.png" alt="">
                            <h3> The Scarred Battlegrounds </h3>
                            <p> 
                            </p>
                        </section>
                        <section class="card card-body game-item">
                            <img src="images/FinalImages/art-19.png" alt="">
                            <h3> The Empty Giant </h3>
                            <p>
                            </p>
                        </section>
                        <section class="card card-body game-item">
                            <img src="images/FinalImages/gameart-6thumb.png" alt="Drawing of African Wild Dog">
                            <h3> Verdali </h3>
                            <p> 
                            </p>
                        </section>
                        <section class="card card-body game-item">
                            <img src="images/FinalImages/art-14.png" alt="Drawing of African Wild Dog">
                            <h3> Nevermore </h3>
                            <p> 
                            </p>
                        </section>
                        <section class="card card-body game-item">
                            <img src="images/FinalImages/art-13.png" alt="Drawing of African Wild Dog">
                            <h3> The Bonded State </h3>
                            <p> 
                            </p>
                        </section>
                        <section class="card card-body game-item">
                            <img src="images/FinalImages/art-15.png" alt="Drawing of African Wild Dog">
                            <h3> Empty Ones </h3>
                            <p> 
                            </p>
                        </section>
                        <section class="card card-body game-item">
                            <img src="images/FinalImages/art-16.png" alt="Drawing of African Wild Dog">
                            <h3> Goldarch Forest </h3>
                            <p> 
                            </p>
                        </section>
                    </div>
                </div>

                <div class="carousel-buttons">
                    <a class="button secondary play">Play</a> 
                    <a class="button secondary stop">Stop</a> 
                </div>
            </div>

            <div class="container main-grid">
                <div class="sideleft">
                    <br>
                    <h2>Art Assets</h2>
                    <p> Working on AToT has been an amazing experience thus far, and I am incredibly proud of the assets I have created for the game. Check them out below. </p>
                </div>
            </div>

            <div class="game-art">
                <img src="images/FinalImages/gameart-1.png" alt="Pixel art">
                <img src="images/FinalImages/gameart-2.png" alt="Pixel art">
                <img src="images/FinalImages/gameart-3.png" alt="Pixel art">
                <img src="images/FinalImages/gameart-4.png" alt="Pixel art">
            </div>
        </div>
    </main>

    <?php
        include("include/footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Fontawesome-->
    <script src="https://kit.fontawesome.com/1a3affa78b.js" crossorigin="anonymous"></script>
    
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 3,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    480:{
                        items:2,
                        nav:true
                    },
                    992:{
                        items:3,
                        nav:true
                    }
                }
            });
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
            })
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })
        })
    </script>
    <script src="js/reveal.js"></script>
    <script src="js/jquery.cycle.all.js"></script>
    <script src="js/slider.js"></script>

</body>
</html>