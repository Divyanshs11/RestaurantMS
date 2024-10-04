<?php   


if(isset($_POST['ulog'])){
    session_start();
    include('config.php');  
    $userid = $_POST['userid'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $userid = stripcslashes($userid);  
        $password = stripcslashes($password);  
        $userid = mysqli_real_escape_string($conn, $userid);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from user where userid = '$userid' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            $_SESSION['login_admin'] = $userid; 
            echo "<script> alert('Login successful');
             window.location = 'http://localhost/phpsixd/#booktable';
            </script>";
              
        }  
        else{  
            echo "<script> alert('Login failed. Invalid username or password.');
            window.location ='login.php';
            
            </script>";  
        } 
    }    
?>  