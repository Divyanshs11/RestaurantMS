<?php

include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM bookedtable WHERE id = '$id'";

if(mysqli_query($conn , $sql)){
		echo "<script>
				alert('Data Delete Successfully');
				window.location = 'http://localhost/phpsixd/admin/user.php';
		</script>";
	}else{
		echo "error" .mysqli_error($conn);
	}

?>