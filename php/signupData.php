<?php

  $conn = mysqli_connect("localhost", "root", "", "tehweb");
  if($conn === false){
    die("EROARE: Nu s-a putut conecta."
      . mysqli_connect_error());
  }
  
  if(isset($_POST['nume']) and isset($_POST['prenume']) and isset($_POST['email']) and isset($_POST['parola'])) {
    $nume = mysqli_real_escape_string($conn, $_POST['nume']);
    $prenume = mysqli_real_escape_string($conn, $_POST['prenume']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $parola = mysqli_real_escape_string($conn, md5($_POST['parola']));

    $sql = "INSERT INTO users(nume, prenume, email, parola) VALUES ('" . $nume . "', '" . $prenume . "', '" . $email . "', '" . $parola . "')";
    if(mysqli_query($conn, $sql)) {
      echo json_encode(array("status" => "true", "message" => "Datele au fost transmise!"));
    } else {
      echo json_encode(array("status" => "false", "message" => "Lipsesc datele!"));
    }
  }

  mysqli_close($conn);
?>

