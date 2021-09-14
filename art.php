<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Traditional Art | Robin Balatbat</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <header>
        <?php include("include/nav.php");?>
    </header>

    <?php 
        $headertext = 'Traditional Art Commissions';
        include("include/banner.php")
    ?>
    <div class="clearfix"></div>

    <main>
        <div class="main-padding">
            <div class="container main-grid">
                <section class="sideleft">
                    <h2> My Artistic Process </h2>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I start my drawing process with a simple pencil sketch. Sometimes the sketches start out as
                        simple doodles in my class notebooks, other times I'm able to just drop it right onto the page
                        without another thought.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Either way, my sketches go through multiple stages of
                        refinement. Each iteration I add more details, clean up the lines, and start thinking
                        about what colors I want.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Then comes the fun part of inking. Once I put the ink onto the page, there's no going back.
                        Like with the base sketch, I go through with the pen multiple times
                        to refine the thickness of each stroke and to perfect the detail.
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If I decide to color a piece, I start with a dusting of the lightest colors
                        before I deepen the shadows. This is the same regardless of if I do colored pencils
                        or paint. Once I finish coloring, I redo the ink.
                    </p>
                    
                    <h2> My Supplies </h2>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here's my list of art supplies that I commonly rely on. Click on the item's name to head to it's company's website. 
                        I am in no way affiliated with these products.
                    </p>
                    <ul class="supplies">
                        <li><a href="https://www.prismacolor.com/colored-pencils/premier-colored-pencils/premier-soft-core-colored-pencils/PCPremierSoftCoreColoredPencils"> Prismacolor Premier Soft Core Colored Pencils </a> </li>
                        <li><a href="https://arteza.com/dp/watercolor-real-brush-pens-set-of-48"> Arteza Watercolor Brush Pens </a> </li>
                        <li><a href="https://arteza.com/dp/gouache-premium-artist-paints-set-24-colors"> Arteza Goauche Ink </a> </li>
                        <li><a href="https://www.sakuraofamerica.com/product/pigma-micron/"> Sakura Pigma Micron Archival Ink </a> </li>
                        <li><a href="https://www.staedtler.us/en/products/pencils-accessories/pencils/mars-lumograph-100-premium-quality-pencil/"> Staedtler Mars Lumograph Drawing Pencils </a> </li>
                    </ul>
                </section>

                <div class="sideright">
                    <img src="images/logo-2.png" alt="Robin's Logo" height="350">
                    <a class="button btn-block" href="contact.php">Order a Commission Now</a>
                </div>

                <div class="sideleft">
                    <h2>My Rates</h2>
                    <p> Here are my rates for traditionally drawn pieces. </p>
                </div>
            </div>
            
            <div class="container-gallery">
                <section class="card card-body comm-item">
                    <img src="images/FinalImages/art-18thumb.png" alt="Drawing of an eye" height="350px">
                    <h3> Sketches </h3>
                    <p> Simple and messy sketches done on bristol board with graphite pencils.
                        <br>$5.00 +
                    </p>
                </section>
                <section class="card card-body comm-item">
                    <img src="images/art-7ink.png" alt="Drawing" height="350px">
                    <h3> Inked </h3>
                    <p> Artwork has been inked with Micron Pens.
                        <br>$7.00 +
                    </p>
                </section>
                <section class="card card-body comm-item">
                    <img src="images/art-3.jpg" alt="Drawing of African Wild Dog" height="350px">
                    <h3> Colored and Inked </h3>
                    <p> Artwork is inked with details and fully colored!
                        <br>$10.00 +
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