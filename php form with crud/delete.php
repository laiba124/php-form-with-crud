<?php
 include 'db.php';
$id = $_GET['id'];
$query = "DELETE FROM contacts WHERE id=$id "; 
$result = mysqli_query($conn, $query);
if($result==true)
{
    
   echo "Data deleted Successfully";
   header('Location:welcome.php'.$SERVER['HTTP_REFERER']);

}
else
{
    echo "Not Deleted";
}
?>
 