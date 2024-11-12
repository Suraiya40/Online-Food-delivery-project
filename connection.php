
<?php
    $servername= 'localhost';
    $username= 'root';
    $password= ' ';
    $dbname= 'customer';
    
	// Database connection
	$conn = mysqli_connect('localhost','root','','customer');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
	}
?>