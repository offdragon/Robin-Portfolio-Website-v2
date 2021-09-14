<?php 

    // connect to the database
    $con = mysqli_connect("localhost","root","","student");

    if (!$con) {
        die("Connection failed".mysqli_error($con));
    }
    
    // assign the variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // query for inserting into database
    $sql = "INSERT INTO registration(name,email,phone,message)VALUES('$name','$email','$phone','$message')";

    // Check if data has been inserted
    if (mysqli_query($con, $sql)) {
        echo "<script>
            window.location = '../sent.php';
        </script>";
    } else {
        echo
        "<script>
            alert('Failed to send message.');
            window.location = '../contact.php';
        </script>";
    }
    
?>