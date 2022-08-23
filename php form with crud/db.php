
   <?php  
   

    $servername = "localhost";
    $username = "root";
    $password="";
    $dbname ="contacts";    
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn-> connect_error)
    {
        die("Connection Failed" . $conn->connect_error);
    } ?>