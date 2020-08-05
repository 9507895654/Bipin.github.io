<?php
$_SERVER = "localhost";
$_username = "root";
$password = "";
$db = "massage";

$con =mysqli_connect($_SERVER,$_username,$password,$db);
if($con){
   ?>
   <script>
       alert("connected")
   </script>
   <?php
}else{
    ?>
   <script>
       alert("connected")
   </script>
   <?php
}
?>