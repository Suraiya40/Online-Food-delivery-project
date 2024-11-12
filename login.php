
<?php
// Start a session to manage login sessions
session_start();
include_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $e_mail = $_POST['e_mail'];
        $password = $_POST['password'];

        // If user is found, verify password
        if (!empty ($e_mail) && !empty ($password) && !is_numeric($e_mail) )
        {
            $query= "select * from customer where e_mail = '$e_mail' limit 1";
            $result= mysqli_query($conn, $query);
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] == $password)
                    {
                        header('location: insert1.php');
                        die;
                    }
                }
            }
            echo "<script type= 'text/javascript'>alert ('wrong password'),/script>";

        }

         else {
            echo "<script type= 'text/javascript'>alert ('wrong password'),/script>";
        }
    }

?>

// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <h1>Log in</h1>
        <form action="insert1.php" method="post">
    
            <label>Email:</label><br>
            <input type="email" id="e_mail" name="e_mail" required><br><br>
    
            <label>Password:</label><br>
            <input type="text" id="password" name="password" required><br><br>
    
            <!-- Submit Button -->
            <input class="submit" type="submit" name="submit" value="submit">
        </form>
        
        <p>No account? <a href="signup.php">Sign up Here</a></p>


    </div>
</body>
</html>