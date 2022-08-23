<?php
        include 'db.php';
            
            $id=$_GET['id'];
            $first_name = $_GET['firstname'];
            $last_name = $_GET['lastname'];
            $email =$_GET['email'];
            $phone = $_GET['phone'];         
            $messagesubject= $_GET['messagesubject']; 
            $message=$_GET['message'];
            $phone_number = $phone[0].$phone[1].$phone[2];                                
            $query = "UPDATE contacts SET firstname='$first_name',lastname='$last_name',email='$email',phone='$phone_number',messagesubject='$messagesubject',message = '$message' WHERE id='$id'";
            mysqli_query($conn, $query);    
            echo "Record updated"; 
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Form</title>
    </head>
    <body>
        <h1>Record Updated</h1><br>
        <a style="background-color: #4CAF50; 
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
  font-size: 16px;" href="welcome.php">View all records</a>
</body>
</html>