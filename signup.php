
<?php  
 $name =  "SIR JP"; 
 $age = 25; 
 $gender = "female"; 
 $isMale=""; 
 $isFemale="";

 if($gender=="male") {
    $isMale = "selected";
 } else
 { $isFemale = "selected"; }

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

 Name
<input type="text" value="<?php echo $name; ?>" > <br><br>
 
Age
<input type="number" value="<?php echo $age; ?>" > <br><br>

Gender
<select>
    <option></option>
    <option value="male" <?php echo $isMale; ?>>Male</option>
    <option value="female" <?php echo $isFemale; ?>>Female</option>
</select>

</body>
</html>