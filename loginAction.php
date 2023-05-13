
<?php
 

     //open database connection
     include 'dbconnect.php';  

     //query
     $sql = "SELECT * FROM user where username='".$_POST["txtusername"]."'   AND pass='".$_POST["txtpassword"]."'"; 
    


     $result = $conn->query($sql); 
     if ($result-> num_rows > 0) 
     { 
        while($row = $result->fetch_assoc()) 
        {       
            session_start(); 
            $_SESSION["userid"] = $row["userid"];
            $_SESSION["userfullname"] = $row["name"];
            $_SESSION["userphoto"] = $row["photo"]; 
            header('Location: dashboard.php');
        } 
     }  
     else
     { 
        echo "Invalid login<br><a href='index.php'>Login Again<a>";
     }
     $conn->close(); 
     



    
?>



