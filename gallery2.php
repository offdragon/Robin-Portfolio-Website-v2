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
    <title>Gallery Page 2 | Robin Balatbat</title>
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
                    <a href="images/FinalImages/art-13.png" data-caption="Sketch drawing of the Bonded State in A Tale of Two">
                        <img src="images/FinalImages/art-13thumb.png" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/FinalImages/art-14.png" data-caption="Sketch drawing of Nevermore from A Tale of Two">
                        <img src="images/FinalImages/art-14thumb.png" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/FinalImages/art-15.png" data-caption="Sketch drawing of Empty Ones from A Tale of Two">
                        <img src="images/FinalImages/art-15thumb.png" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/FinalImages/art-19.png" data-caption="Pixel art of the Empty Giant from A Tale of Two">
                        <img src="images/FinalImages/art-19thumb.png" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/FinalImages/art-17.png" data-caption="Pencil drawing of a Samoyed puppy">
                        <img src="images/FinalImages/art-17thumb.png" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/FinalImages/gameart-7.png" data-caption="Pixel art for the Scarred Battlegrounds in A Tale of Two">
                        <img src="images/FinalImages/gameart-7thumb.png" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/FinalImages/art-16.png" data-caption="Sketch drawing of Goldarch Forest in A Tale of Two">
                        <img src="images/FinalImages/art-16thumb.png" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/FinalImages/gameart-6.png" data-caption="Digital art drawing of Verdali and Chaos from A Tale of Two">
                        <img src="images/FinalImages/gameart-6thumb.png" alt="Art">
                    </a>
                </div>
                <div class="item">
                    <a href="images/FinalImages/art-18.png" data-caption="Pencil drawing of eyes">
                        <img src="images/FinalImages/art-18thumb.png" alt="Art">
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
                                    <li class="page-item"><a class="page-link" href="gallery.php">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="gallery2.php">2</a></li>
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