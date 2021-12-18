<?php

   $conn = mysqli_connect("localhost", "root", "", "tehweb");
   if($conn === false){
      die("EROARE: Nu s-a putut conecta."
         . mysqli_connect_error());
   }

   if(isset($_POST['email']) and isset($_POST['parola'])) {
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $parola = mysqli_real_escape_string($conn, md5($_POST['parola']));

      $sql = "SELECT * FROM users WHERE email = '$email' AND parola = '$parola'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0) {
         echo json_encode(array("status" => "true", "message" => "Datele coincid."));
       } else {
         echo json_encode(array("status" => "false", "message" => "Datele difera."));
       }
   }

  mysqli_close($conn);
?>