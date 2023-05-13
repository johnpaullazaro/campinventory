
<?php

    include 'dbconnect.php';
     

    $sql = "Delete from user where userid=".$_GET["uid"]."";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: users.php');  

    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>


