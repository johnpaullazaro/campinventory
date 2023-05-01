<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>

   
    <?php
        session_start();
        if(isset($_SESSION["userid"])) 
        {
           // echo $_SESSION["userid"];
            echo $_SESSION["userfullname"];

            if($_SESSION["userphoto"]!="") {
                echo "<img style='border-radius:50%;height:200px;width:auto;' src='".$_SESSION["userphoto"]."' />";
     
            }
          }
    ?>

    <br>
    <a href="logoutAction.php">Logout</a>

</body>
</html>