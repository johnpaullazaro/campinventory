



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


<form method="POST" action="signupAction.php">
 
        Name
        <input type="text" name="txtname"  > <br><br>
        
        Age
        <input type="number" name="txtage" > <br><br>

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

        <a href="index.php">Cancel</a>

</form>


</body>
</html>