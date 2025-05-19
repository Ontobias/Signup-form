<?php
    session_start();
    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == $_POST['SUB'])
    {
        $firstname = $_POST['Fname'];
        $lastname = $_POST['Lname'];
        $Gender = $_POST['gender'];
        $Contact = $_POST['contact.'];
        $Address = $_POST['address'];
        $Email = $_POST['email'];
        $Password = $_POST['pass'];

        if(!empty($Email) && !empty($Password) && !is_numeric($Email))
        {

            $query = "insert into form (Fname,Lname,gender,contact.,address,email,pass) values ( '$firstname', '$lastname', '$Gender', '$Contact', '$Address', '$Email', '$Password')";

            mysqli_query($con,$query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please enter a valid information')</script>";
        }
        
    
    }

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="signup" >
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="Fname" required>
            <label>Last Name</label>
            <input type="text" name="Lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Address</label>
            <input type="tel" name="contact." required>
            <label>Address</label>
            <input type="text" name="address" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="SUB" value="Submit">
        </form>
        <p>By clicking the Sign Up button, you agree to our<br>
         <a href="">Terms and Conditions</a> and <a href="#">Policy Privacy</a>
        </p>
        <p>Already have an account?<a href="login.php">Login Here</a></p>
    </div>
    
</body>


</html>