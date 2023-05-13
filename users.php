<?php include 'avatarlogout.php' ?>


<h1>Admin</h1>
<a href="signup.php">Create New User</a>
<br>


<?php 
    include 'dbconnect.php';   
   
    $sql = "SELECT * FROM user where userid!=".$_SESSION["userid"];  
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
             echo "<br><img src='https://i.pravatar.cc/2".$row["userid"]."' />".$row["name"];
             echo "<br><a style='float:right;' href='userUpdate.php?uid=".$row["userid"]."'>Update</a>";
              echo "<br><a style='float:right;' href='userDelete.php?uid=".$row["userid"]."'>Delete</a>";
        }
    }  
    $conn->close(); 
?>