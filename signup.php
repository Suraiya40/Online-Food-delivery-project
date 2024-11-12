<?php
// Start a session to manage login sessions
session_start();
include_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $customer_id = $_POST['customer_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $e_mail = $_POST['e_mail'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $password = $_POST['password'];
    

        // If user is found, verify password
        if (!empty ($e_mail) && !empty ($password) && !is_numeric($e_mail) )
        {
            $query= "INSERT INTO customer (customer_id, first_name, last_name, e_mail, phone_number, address, password) 
                VALUES ('$customer_id', '$first_name','$last_name' ,'$e_mail','$phone_number', '$address', '$password')";
            mysqli_query($conn, $query);
            echo"<script type= 'text/javascript'>alert ('succesfully register'),/script>";

        }
         else 
        {
            echo "<script type= 'text/javascript'>alert ('please enetr some valid information'),/script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="signup">
        <h1>Sign up</h1>
        <form action="insert.php" method="post">
        
            <label>Customer ID:</label><br>
            <input type="text" id="customer_id" name="customer_id" required><br><br>
    
            <label>First Name:</label><br>
            <input type="text" id="first_name" name="first_name" required><br><br>
    
            <label>Last Name:</label><br>
            <input type="text" id="last_name" name="last_name" required><br><br>
    
            <label>Email:</label><br>
            <input type="email" id="e_mail" name="e_mail" required><br><br>
    
            <label>Phone Number:</label><br>
            <input type="tel" id="phone_number" name="phone_number" required><br><br>
    
            <!-- Address -->
            <label>Address:</label><br>
            <textarea id="address" name="address" rows="4" cols="33" required></textarea><br><br>
    
            <label>Password:</label><br>
            <input type="text" id="password" name="password" required><br><br>
    
    
            <!-- Submit Button -->
            <input class="submit" type="submit" name="submit" value="submit">
        </form>
        <p> By clicking the sign up button you agree our <br>
        <a href="#"> Terms and Condition</a> and <a href="#"> Privacy and Policy</a></p>
        <p>Already have and account? 
            <a href="login.php">Log in Here</a>
        </p>


    </div>
</body>
</html>