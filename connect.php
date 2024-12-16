<?php
 $HOSTNAME='localhost';
 $USERNAME='root';
 $PASSWORD='';
 $database='registration';
 $c=new mysqli($HOSTNAME,$USERNAME,$PASSWORD,$database);

 if($c)
 {
   echo" <html>
   <head>
   <script>
 alert('succesful connection');
   </script>
   </head>
   </html>";

 }
 else{
    die(mysqli_error($c));
 }
 ?>
 