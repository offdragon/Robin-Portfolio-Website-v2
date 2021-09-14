<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>About | Robin Balatbat</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <header>
        <?php include("include/nav.php");?>
    </header>

    <?php 
        $headertext = 'About Me';
        include("include/banner.php")
    ?>
    <div class="clearfix"></div>

    <main>
        <div class="main-padding">
            <div class="container main-grid">
                <section class="sideleft">
                    <h1>
                        Hello
                    </h1>
                    <p>
                    I'm Robin. I was born and raised Hawaii and moved to Washington state in 2019. I'm currently a junior at Western Washington University in the Computer Science Major. <br>
                    I've always had a passion for the arts and creativity. My love for drawing came from the time I spent with my dad drawing together. Over the years, I've developed my own skills through practice and dedication. Pencil, pen, paint, pastel, digital — I've dabbled in many mediums. I've even expanded my reach to sculpting, bookbinding, three-dimensional modeling, and game creation. Imagination and creativity are important to me, and I'm always looking for new ways to express myself. <br>
                    It's nice to meet you!
                    </p>
                </section>
                <div class="sideright">
                    <img src="images/selfie-4.png" alt="Image of Robin Balatbat" height="300px">
                </div>
                <section class="sideright">
                    <h3>
                        My Experience
                    </h3>
                </section>
            </div>

            <div class="container-gallery experience">
                <ul class="card card-body">
                    <h4>4 Years Programming Experience</h4>
                    <ul>
                        <li> C++ </li>
                        <li> C </li>
                        <li> Java </li>
                        <li> JavaScript</li>
                        <li> Python </li>
                        <li> PHP </li>
                    </ul>
                </ul>
                <ul class="card card-body">
                    <h4>15 Years Art Experience</h4>
                    <ul>
                        <li> Photo Editing </li>
                        <li> 3D Modeling </li>
                        <li> Digital Art </li>
                        <li> Traditional Art Mediums</li>
                        <li> Sculpting </li>
                        <li> Book Binding </li>
                    </ul>
                </ul>
                <ul class="card card-body">
                    <h4>1 Year GameDev Experience</h4>
                    <ul>
                        <li> Unity </li>
                        <li> GameMaker Studio 2 </li>
                        <li> Godot </li>
                        <li> Game Animation</li>
                        <li> Music Creation </li>
                        <li> Level Designing </li>
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