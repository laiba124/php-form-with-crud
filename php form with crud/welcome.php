<?php
  include 'db.php';
 
        $query1 ="SELECT *FROM contacts";
        $result = mysqli_query($conn, $query1); ?>   
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="stylesheet" href="style.css">

            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>    
        <h2>Contacts</h2>
        <form method='POST'>
        <table id="table">
            <thead id="th">
                <tr>
                    <th>ID&nbsp</th>
                    <th>First Name&nbsp</th>
                    <th>Last Name&nbsp</th>
                    <th>Email&nbsp</th> 
                    <th>Phone&nbsp</th>
                    <th>Message&nbsp</th>
                    <th>Message Subject&nbsp</th>
                    <th id="th1" colspan="2">Action&nbsp</th>

                </tr>
            </thead>
        </body>
 
<?php        
    if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            { 
 ?>
    <tr>
    <td > <?php echo $row ['id']; ?>&nbsp</td>
    <td> <?php echo $row ['firstname']; ?>&nbsp</td>
    <td> <?php echo $row ['lastname']; ?>&nbsp</td>
    <td> <?php echo $row ['email']; ?>&nbsp&nbsp</td>
    <td> <?php echo $row ['phone']; ?>&nbsp&nbsp</td>
    <td> <?php echo $row ['message']; ?>&nbsp&nbsp</td>
    <td> <?php echo $row ['messagesubject']; ?>&nbsp&nbsp</td>
    <td><a    id="btn1" href="update.php?id=<?php echo $row ['id'];?>">Update&nbsp&nbsp</a></td> 
    <td><a    id="btn2" href="delete.php?id=<?php echo $row ['id'] ?>">Delete</a></td> 
    
    <?php
    }
}
else{
    echo "No record found";
}    
?>
</tbody>
</table>
</form>
</div></body>
</html>
















 