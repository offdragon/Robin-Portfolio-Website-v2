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
    <title>Commissions | Robin Balatbat</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <header>
        <?php include("include/nav.php");?>
    </header>

    <?php 
        $headertext = 'My Commissions';
        include("include/banner.php")
    ?>
    <div class="clearfix"></div>

    <main>
        <div class="main-padding">
            <!-- Carousel Goes here with reviews for my work/commisions-->
            <div class="container main-grid">
                <section class="sideleft">
                    <h1>
                        Commisions
                    </h1>
                    <p>
                    Want me to do art for you? Check out samples of my digital and traditional art pieces. If you have any questions, or if you want a commission, feel free to use the contact form.
                    <br>
                    I value quality and imagination, and I love seeing ideas come to life. I'll work with you to create the perfect piece in a timely manner. 
                    </p>
                    <a class="button btn-block" href="contact.php">Order a Commission Now</a>
                </section>
                <div class="sideright">
                    <div class="slider">
                        <div class="slide">
                            <img src="images/logo-2.png" alt="Robin's Logo">
                        </div>
                        <div class="slide">
                            <img src="images/art-1thumb.jpg" alt="Red and blue painting of a circular symbol">
                        </div>
                        <div class="slide">
                            <img src="images/art-2thumb.jpg" alt="Creature with a pattern for its head">
                        </div>
                        <div class="slide">
                            <img src="images/FinalImages/art-14thumb.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="images/art-4thumb.jpg" alt="A painting of a very large raccoon in a green field">
                        </div>
                        <div class="slide">
                            <img src="images/art-5thumb.jpg" alt="Golden dragon in space on top of the moon">
                        </div>
                        <div class="slide">
                            <img src="images/FinalImages/art-18thumb.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="images/art-7thumb.jpg" alt="Monstrous creature holding a crown above a young woman">
                        </div>
                        <div class="slide">
                            <img src="images/art-8thumb.jpg" alt="Young woman in a flowing dress with long blue hair">
                        </div>
                        <div class="slide">
                            <img src="images/art-9thumb.jpg" alt="Flamingo standing in a lake with the moon rising behind it">
                        </div>
                        <div class="slide">
                            <img src="images/FinalImages/art-17thumb.png" alt="">
                        </div>
                    </div>
                </div>
                <section class="sideleft">
                    <h3>Reviews</h3>
                    <p>
                        These are reviews left by former patrons of mine!
                    </p>
                </section>
            </div>
            
            <div class="carousel-container">
                
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <h4>John Doe</h4>
                            <blockquote> Incredible Work! Robin never fails to deliver</blockquote>
                        </div>
                        <div class="item">
                            <i class="fa fa-car" aria-hidden="true"></i>
                            <h4>Elliot Ramirez</h4>
                            <blockquote> Quality of work was incredible and delivered in a timely manner</blockquote>
                        </div>
                        <div class="item">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <h4>Nicole Sanchez</h4>
                            <blockquote> Amazing work and Robin was a pleasure to work with</blockquote>
                        </div>
                        <div class="item">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <h4>WHS c/o 2018 Counsel</h4>
                            <blockquote> Wonderful work and the resulting mural was beautiful</blockquote>
                        </div>
                        <div class="item">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <h4>Charles Bird</h4>
                            <blockquote> Robin is an amazing artist and I would recommend him to everyone</blockquote>
                        </div>
                    </div>
                </div>

                <div class="carousel-buttons">
                    <a class="button secondary play">Play</a> 
                    <a class="button secondary stop">Stop</a> 
                </div>
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