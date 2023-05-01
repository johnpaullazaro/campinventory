
<?php
   
     
      

   session_start();
   if(isset($_SESSION["userid"])) 
   { 
       //remove all sessions
      session_unset(); 
      session_destroy();
      header('Location: index.php');
   }  
         
 
?>



