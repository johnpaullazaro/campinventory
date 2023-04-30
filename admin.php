<h1>Admin</h1>
<a href="signup.php">Create New User</a>
<br>


<?php 
    include 'dbconnect.php';  

    $sql = "SELECT * FROM user";

    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
          //  echo "<br><img src='https://i.pravatar.cc/12".$row["userid"]."' />".$row["name"];
            echo "<br>".$row["name"]; 
        }
    }  
    $conn->close(); 
?>


