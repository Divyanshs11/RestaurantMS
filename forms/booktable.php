<?php
if(isset($_POST['book'])){

  include 'config.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    $message = $_POST['message'];

  
    $sql = "INSERT INTO bookedtable(name, email, phone, date, time, people, message) 
            VALUES ('$name', '$email', '$phone', '$date', '$time', '$people', '$message')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Table Booking Successfully');
                window.location = 'http://localhost/phpsixd/';
          </script>";

    }else{
        echo "Error: " .mysqli_error($conn);
    }
}

?>
