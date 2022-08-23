<?php 
 
include 'db.php';
 
$id = $_GET['id'];
 
$query1 ="SELECT *FROM contacts WHERE id=$id ";

$result = mysqli_query($conn, $query1); 
if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            { 
                $id= $row ['id'];
                $firstname=$row ['firstname'];
                $lastname= $row ['lastname'];
                $email= $row ['email'];
                $phone=$row ['phone'];
                $message=$row ['message'];
                $msgsub= $row ['messagesubject']; 
                echo $msgsub;               
                $phone1 =  $phone[0].$phone[1].$phone[2];
                $phone2 =  $phone[3].$phone[4].$phone[5];
                $phone3 =  $phone[6].$phone[7].$phone[8];
                echo $phone1,$phone2,$phone3;
                
             }
        }

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
        <h1>Contact Form</h1>
        <h5>Please fill in your information and we'll be sending your order in no time</h5>
        <form class="form"  action="data.php" method="GET">

            <input type="hidden" name="id" value=<?php echo $id ?> />
            <!--Name-->
            <label for="YourName">Your Name:</label>
            <input  type="text" id="fname" value="<?php echo $firstname?>"name="firstname" placeholder="First Name">
            <input type="text" id="lname" value="<?php echo $lastname?>"name="lastname" placeholder="Last Name">
        
             <!--Email-->
            <br><br> <label for="YourName">Your Email:</label>
            <input  type="email" id="email"value="<?php echo $email?>" name="email" placeholder="e.g hello@contact.net"><br><br>        
       
           <!--Phone-->
            <label for="phone"<span class="required">*</span>Phone : </label>      
            <input  id="phone" value="<?php echo $phone1?>" type="tel"  name="phone[]" required maxlength="3"   required placeholder="###">
            <input id="phone2" value="<?php echo $phone2?>" type="tel"   name="phone[]" required maxlength="3"   required placeholder="###">
            <input id ="phone3"value="<?php echo $phone3?>" type="tel"  name="phone[]" required maxlength="3"    required placeholder="###">

            <!--Message Subject-->
            <br><br> <label <span class="required">*</span>Message Subject : </label>        
            <select name="messagesubject"  value="<?php echo $msgsub?>" id="messagesubject">
            <?php 
                if($msgsub == 'Internship') {?>

                    <option hidden selected ><?php echo $msgsub?> </option>
                    <option  value="Other">Other</option>
                    <option value="Job">Job</option>
               <?php } 
               else if($msgsub =='Job') { ?>

                <option hidden selected><?php echo $msgsub?> </option>
                <option value="Other">Other</option>
                <option value="Internship">Internship</option>
            <?php }
             else if($msgsub =='Other') { ?>

             <option  hidden selected><?php echo $msgsub?> </option>
             <option value="Job">Job</option>
              <option value="Internship">Internship</option>
         <?php }
            else{ ?>
                <option  hidden selected><?php echo $msgsub?> </option>
 
                <option value="Job">Job</option>
                <option value="Internship">Internship</option>
                <option value="Other">Other</option>

          <?php  }?>      
            </select> <br><br>        
            <!--Message-->
            <label <span class="required">*</span>Message: </label><br>
            <textarea id="textarea" value="" name="message" rows="5" required cols="50"><?php echo $message?></textarea><br>
        
            <!--Submit Button-->
            <hr>         


           <input type="submit" name="" value="Update" /> </a>           
        </form>
        
    </body>
</html>

  






 