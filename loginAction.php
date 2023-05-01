
<?php
      // get user inputs
      $username = $_POST["txtusername"];
      $password = $_POST["txtpassword"];

     //open database connection
     include 'dbconnect.php';  

     //query
     $sql = "SELECT * FROM user where username='".$username."' AND pass='".$password."'"; 
     $result = $conn->query($sql); 
     if ($result-> num_rows > 0) { 
        while($row = $result->fetch_assoc()) { 
            echo "Welcome".$row["name"];
        
            session_start();

            $_SESSION["userid"] = $row["userid"];
            $_SESSION["userfullname"] = $row["name"];
            $_SESSION["userphoto"] =   $row["photo"];

            header('Location: dashboard.php');
        } 
     }  
     else
     {
        echo "Invalid login";
        echo "<br><a href='index.php'>Login Again<a>";
     }
     $conn->close(); 
 
?>



