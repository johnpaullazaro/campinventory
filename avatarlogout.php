<div style="float:right;width:300px;align-items:middle;">
   

<?php
        session_start();
        
        if(isset($_SESSION["userid"])) 
        {
            echo  "<img style='border-radius:50%;width:70px;height:70px;' src='".$_SESSION["userphoto"]."' />  ";
            echo $_SESSION["userfullname"]; 

          
          }
    ?>
 
    <a href="logoutAction.php">Logout</a></div>
        </div>