<?php

if(isset($_POST['submit'])){

  include 'config.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

   
    $sql = "INSERT INTO form_submissions(name, email,subject, message) VALUES ('$name', '$email','$subject', '$message')";

    if(mysqli_query($conn, $sql)) {
          echo "<script>
                alert('Message send');
                window.location = 'http://localhost/phpsixd/';
          </script>";

    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


?>