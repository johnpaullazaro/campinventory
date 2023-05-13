
<?php 
    include 'dbconnect.php';   
    session_start();
    $sql = "SELECT * FROM user where userid=".$_GET["uid"];  
    $result = $conn->query($sql); 

    $name = "";
    $age = 0;

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $name=  $row["name"];
          $age = $row["age"];
        }
    }  
    $conn->close(); 
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>

<h1>
    Sign Up
</h1>


<form method="POST" action="userUpdateAction.php?uid=<?php echo $_GET["uid"] ?>">
 
        Name
        <input type="text" name="txtname" 
        value="<?php echo  $name;?>" >
         <br><br>
        
        Age
        <input type="number" name="txtage" 
        value="<?php echo  $age;?>"> <br><br>

        Gender
        <select name="txtgender">
            <option></option>
            <option value="male"  >Male</option>
            <option value="female"  >Female</option>
        </select>


        <br>
        Username
        <input type="text" name="txtusername"  > <br><br>
        <br>
        Password
        <input type="text" name="txtpassword"  > <br><br>
        Photo URL
        <input type="text" name="txtphoto"  > <br><br>
        <br>
        <br> 

        <input type="submit" value="Submit" />

        <a href="users.php">Cancel</a>

</form>


</body>
</html>