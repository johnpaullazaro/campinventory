<?php 

    $name = $_POST["txtname"];
    $age = $_POST["txtage"];
    $gender = $_POST["txtgender"];
    $username = $_POST["txtusername"];
    $password = $_POST["txtpassword"];
    $photo = $_POST["txtphoto"];
 
    
    include 'dbconnect.php';



    $sql = "INSERT INTO user(name,age,gender,username,pass,photo) 
    values('${name}','${age}','${gender}','${username}','${password}','${photo}')";
    
    if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>  