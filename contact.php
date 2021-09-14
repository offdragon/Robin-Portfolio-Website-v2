<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Contact Form | Robin Balatbat</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <header>
        <?php include("include/nav.php");?>
    </header>

    <?php 
        $headertext = 'Contact Me';
        include("include/banner.php")
    ?>
    <div class="clearfix"></div>

    <main>
        <div class="main-padding">
            <div class="container main-grid">
                <section class="sideleft">
                    <h1>
                        Get in touch
                    </h1>
                    <p>
                        Use the contact form to the right to send me a message or to ask for a commission. I'll respond to you as soon as possible.
                    </p>
                    <div>
                        <img src="images/logo-2.png" alt="Robin's Logo" height="350">
                    </div>
                </section>
                <div class="sideright">
                    <form action="include/connect.php" class="contactform autocomplete" method="POST">
                        <div class="card card-body">
                            
                            <label for="name"><i class="fas fa-user prefix"></i>Name</label> <br>
                            <input type="text" id="name" name="name">
                            <br>
                            <label for="phone"><i class="fas fa-phone prefix"></i>Phone</label> <br>
                            <input type="text" id="phone" name="phone">
                            <br>
                            <label for="email"><i class="fas fa-envelope prefix"></i>Email</label> <br>
                            <input type="email" id="email" name="email">
                            <br>
                            <label for="message"><i class="fas fa-pencil-alt prefix"></i>Write Message</label> <br>
                            <textarea id="message" name="message" rows="10" cols="30"></textarea>
                            <br>
                            <input class="button btn-block" type="submit" value="Send Message">
                        </div>
                        
                    </form>
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
    
    <script src="js/contact.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/reveal.js"></script>

</body>
</html>