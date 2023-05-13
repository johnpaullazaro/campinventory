
<?php

    include 'dbconnect.php';
       

     $sql = "update user set 
     name='".$_POST["txtname"]."',
     age='".$_POST["txtage"]."' 
     
     
     where userid=".$_GET["uid"]."";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: users.php');  

    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>


