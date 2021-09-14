<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Digital Commissions | Robin Balatbat</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <header>
        <?php include("include/nav.php");?>
    </header>

    <?php 
        $headertext = 'Digital Art Commissions';
        include("include/banner.php")
    ?>
    <div class="clearfix"></div>

    <main>
        <div class="main-padding">
            <div class="container main-grid">
                <section class="sideleft">
                    <h2> My Artistic Process </h2>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Like with traditional art, I start my drawing process with a simple pencil sketch. This helps me to refine any digital piece that I want to create.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Once I'm ready for digital work, or I plan on digitizing a traditional piece of art, I scan it into my laptop. All art pieces are scanned at the highest dpi setting for maximum quality.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Then comes the fun part of drawing in a digital program. I extract any linework I may have done and refine it in the program. Then I add layers and layers of color.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I start with greyscale coloring at first. This helps me to adjust the shapes and values of my colors. Then I apply the base colors and shading. If the lineart needs to be refined, I'll do it after all the color is laid down.
                        <br>
                        Digital art is always a fun experience and I'm happy with how my process delivers quality work.
                    </p>
                    
                    <h2> My Supplies </h2>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here's my list of art supplies that I commonly rely on. Click on the item's name to head to it's company's website. 
                        I am in no way affiliated with these programs.
                    </p>
                    <ul class="supplies">
                        <li><a href="https://krita.org/en/"> Krita </a> </li>
                        <li><a href="https://www.piskelapp.com/"> Piskel </a> </li>
                        <li><a href="https://www.adobe.com/products/photoshop.html"> Adobe Photoshop CS6 </a> </li>
                        <li><a href="https://www.sakuraofamerica.com/product/pigma-micron/"> Paint Tool SAI </a> </li>
                        <li><a href="https://www.blender.org/"> Blender </a> </li>
                    </ul>
                </section>

                <div class="sideright">
                    <img src="images/logo-2.png" alt="Robin's Logo" height="350">
                    <a class="button btn-block" href="contact.php">Order a Commission Now</a>
                </div>
            </div>

            <div class="container-gallery">
                <section class="card card-body comm-item">
                    <img src="images/FinalImages/gameart-7thumb.png" alt="" height="350px">
                    <h3> Pixel Art </h3>
                    <p> Colorful sprites or full-blown pixel backgrounds.
                        <br>Price Varies by Size
                    </p>
                </section>
                <section class="card card-body comm-item">
                    <img src="images/art-7thumb.jpg" alt="" height="350px">
                    <h3> Digitized </h3>
                    <p> Traditional artwork that has been colored digitally.
                        <br>$15.00 +
                    </p>
                </section>
                <section class="card card-body comm-item">
                    <img src="images/FinalImages/gameart-6thumb.png" alt="" height="350px">
                    <h3> Full Digital </h3>
                    <p> Artwork that has been completely created in a digital program.
                        <br>$20.00 +
                    </p>
                </section>
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