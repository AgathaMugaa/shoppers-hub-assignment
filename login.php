<?php

require 'connect.php';

$Email = $_POST['email'];
$Password = $_POST['password'];

$retreive = "SELECT * FROM users WHERE email = '$Email' AND password = '$Password'";
$execute = mysqli_query($conn, $retreive);

$count = mysqli_num_rows($execute);

if($count > 0){
   header("Location: dashboard.html");
}
else{
   echo "

         <script>
           alert('Incorrect password or email!');
         </script>

        ";
}

?>