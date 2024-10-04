<?php   


if(isset($_POST['ureg'])){
    include('config.php');
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $userid = $_POST['userid'];  
    $password = $_POST['password'];  
    
   
        
        $sql = "select * from user where userid = '$userid' and password = '$password'";  
        $table = mysqli_query($conn, $sql);
        if(mysqli_num_rows($table)>0){

            echo "<script> alert('User already Exists');
            window.location = 'index.php';
           </script>";
          
        }
        
        else{

            $sql = "INSERT INTO user(name ,email, userid, password)VALUES('$name', '$email', '$userid', '$password')";
            
       
          
        if(mysqli_query($conn,$sql)){ 
           
            echo "<script> alert('Registration successful');
             window.location = 'login.php';
            </script>";
           	  
        }  
        else{  
            echo "error" .mysqli_error($conn);
        } 

    }

    }    
?>  