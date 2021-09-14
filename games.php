<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Games | Robin Balatbat</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <header>
        <?php include("include/nav.php");?>
    </header>

    <?php 
        $headertext = 'My Games';
        include("include/banner.php")
    ?>
    <div class="clearfix"></div>

    <main>
    <div class="main-padding">
            <div class="container main-grid">
                <section class="sideleft">
                    <h2> My Artistic Process </h2>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lately I've been fascinated by the    thought of creating video games.
                        It's a medium that combines my passion for visual creativity and imaginative storytelling.
                        Below are a few of my games &mdash; only one has been fully realized, and the others I've only just begun.
                    </p>
                    
                    <h2> My Supplies </h2>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here's my list of game engines and asset creation programs that I commonly rely on. Click on the item's name to head to it's company's website. 
                        I am in no way affiliated with these products.
                    </p>
                    <ul class="supplies">
                        <li><a href="https://unity.com/"> Unity </a> </li>
                        <li><a href="https://www.yoyogames.com/en/gamemaker"> GameMaker Studio 2 </a> </li>
                        <li><a href="https://krita.org/en/"> Krita </a> </li>
                        <li><a href="https://www.piskelapp.com/"> Piskel </a> </li>
                        <li><a href="https://www.leshylabs.com/apps/sfMaker/"> LeshyLabs 8-Bit SFX Maker </a> </li>
                    </ul>
                </section>

                <div class="sideright">
                    <img src="images/FinalImages/gameart-5.png" alt="Drawing of A Tale of Two logo" height="300px">
                    <a class="button btn-block" href="https://offdragon.itch.io">Check Me Out on Itch.io</a>
                </div>

                <div class="sideleft">
                    <h2>My Game Projects</h2>
                    <p> Here are a few of the game projects I have worked on. </p>
                </div>
            </div>
            
            <div class="container-gallery">
                <section class="card card-body comm-item">
                    <img src="images/Title-thumb.png" alt="Drawing of African Wild Dog" height="350px">
                    <h3> Bounty Hunter: Key Edition </h3>
                    <p> Game project for CSCI 321 in Fall 2020
                    </p>
                </section>
                <section class="card card-body comm-item">
                    <img src="images/art-3.jpg" alt="Drawing of African Wild Dog" height="350px">
                    <h3> Soul, Ward, Bound </h3>
                    <p> Passion project still in the drafting phase.
                    </p>
                </section>
                <section class="card card-body comm-item">
                    <img src="images/FinalImages/gameart-6thumb.png" alt="Digital drawing of the main character of 'A Tale of Two': Verdali" height="350px">
                    <h3> A Tale of Two </h3>
                    <p> Game is currently in development! 
                    </p>
                </section>
            </div>

            <div class="container main-grid">
                <div class="sideleft">
                    <h2>Game Jams</h2>
                    <p> I plan on participating in game jams throughout the summer, check out my work on Itch.io when the time arrives! </p>
                </div>
            </div>
            <div class="container-gallery experience">
                <ul class="card card-body">
                    <h4>Game Maker's Toolkit Jam</h4>
                    <ul>
                        <li> Dates: June 11th-13th</li>
                        <li> Title: TBA </li>
                        <li> Theme: TBA </li>
                        <li> Description: TBA </li>
                    </ul>
                </ul>
                <ul class="card card-body">
                    <h4>Amaze Me Game Jam 2021</h4>
                    <ul>
                        <li> Dates: June 17th-21st </li>
                        <li> Title: Neon Line Ride </li>
                        <li> Theme: Neon </li>
                        <li> Description: TBA </li>
                    </ul>
                </ul>
                <ul class="card card-body">
                    <h4>Future Game Jams TBA</h4>
                    <ul>
                        <li> Dates: TBA </li>
                        <li> Title: TBA </li>
                        <li> Theme: TBA  </li>
                        <li> Description: TBA</li>
                    </ul>
                </ul>
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
    <script src="js/reveal.js"></script>

</body>
</html>