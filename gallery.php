<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <title>Gallery Page 1 | Robin Balatbat</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <header>
        <?php include("include/nav.php");?>
    </header>

    <?php 
        $headertext = 'Art Gallery';
        include("include/banner.php")
    ?>
    <div class="clearfix"></div>

    <main>
        <div class="main-padding">
            <!-- another gallery goes here -->
            
            <div class="container-gallery gallery">
                <div class="item">
                    <a href="images/art-1.jpg" data-caption="Painting for a tabletop RPG campaign--
                    Goauche and Watercolor Pens on Canvas ">
                        <img src="images/art-1thumb.jpg" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/art-2.jpg" data-caption="Painting of Pattern, a character from Brandon Sanderson's Stormlight Archive--
Goauche and Watercolor Pens on Watercolor Paper ">
                        <img src="images/art-2thumb.jpg" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/art-3.jpg" data-caption="Characters from one of my potential video games--
Micron ink and Prismacolor Pencils ">
                        <img src="images/art-3thumb.jpg" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/art-4.jpg" data-caption="Painting of a raccoon in a grassy field--
Goauche and Watercolor Pens on Watercolor Paper ">
                        <img src="images/art-4thumb.jpg" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/art-5.jpg" data-caption="Painting of a dragon on a moon for my personal sketchbook--
Goauche and Watercolor Pens on Sketchbook cover ">
                        <img src="images/art-5thumb.jpg" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/art-6.jpg" data-caption="Painting of the Knight Radiants symbols from Stormlight Archive--
Goauche and Watercolor Pens on Watercolor Paper ">
                        <img src="images/art-6thumb.jpg" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/art-7.jpg" data-caption="Drawing of two characters from one of my potential video games--
Micron Ink and Digital Editing ">
                        <img src="images/art-7thumb.jpg" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/art-8.jpg" data-caption="Drawing of the character Syl from the Stormlight Archive--
Micron Ink and Digital Editing ">
                        <img src="images/art-8thumb.jpg" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/art-9.jpg" data-caption="Painting of a flamingo with the full moon rising behind it--
Goauche and Watercolor Pens on Watercolor Paper ">
                        <img src="images/art-9thumb.jpg" alt="Art">
                    </a>
                </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="pagination flex-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="gallery.php" tabindex="-1">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="gallery.php">1</a></li>
                                    <li class="page-item"><a class="page-link" href="gallery2.php">2</a></li>
                                    <li class="page-item"><a class="page-link" href="gallery2.php">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
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

    <script src="js/main.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="js/reveal.js"></script>

</body>
</html>