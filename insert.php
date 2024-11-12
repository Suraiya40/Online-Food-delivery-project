
<?php
include_once 'connection.php';
// Check if form data is submitted
    if (isset($_POST["submit"])) {
        $customer_id = $_POST['customer_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $e_mail = $_POST['e_mail'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        
    
        // SQL query to insert data into the customers table
        $sql = "INSERT INTO customer (customer_id, first_name, last_name, e_mail, phone_number, address, password) 
                VALUES ('$customer_id', '$first_name','$last_name' ,'$e_mail','$phone_number', '$address', '$password')";
    
        // Execute the query and check if successful
        if(mysqli_query($conn, $sql)){
            echo '<h1 style="color: Tomato ;text-align: center;"> Welcome and go to home page </h1>';
            
            
            echo '<a href="http://localhost/online_food/home.html" > 
            <p style="color: Tomato ;text-align: center; font-size: 30px;"> Home Page </p>
            </a>';
    
    }
    
    else{ echo"error:" .$sql . ":-". mysqli_error($conn);
    }
}
?>