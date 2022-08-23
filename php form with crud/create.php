<?php
  
   include 'db.php';
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email =$_POST['email'];
    $phone = $_POST['phone'];
    $messagesub = $_POST['messagesubject'];
    $message=$_POST['message'];
    $phone_number = $phone[0].$phone[1].$phone[2]; 
    $query ="INSERT INTO contacts (firstname, lastname, email, phone,  messagesubject, message) VALUES ('$first_name','$last_name','$email','$phone_number','$messagesub','$message')";
    mysqli_query($conn, $query);    
    echo "Record Created";
    echo $messagesub;

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
        <h1>CONTACT FORM IS SUBMITTED</h1><br>
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