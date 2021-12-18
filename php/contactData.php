<?php

  $conn = mysqli_connect("localhost", "root", "", "tehweb");
  if($conn === false){
    die("EROARE: Nu s-a putut conecta."
      . mysqli_connect_error());
  }

  if(isset($_POST['nume']) and isset($_POST['prenume']) and isset($_POST['email']) and isset($_POST['subiect']) and isset($_POST['mesaj'])) {
    $nume = mysqli_real_escape_string($conn, $_POST['nume']);
    $prenume = mysqli_real_escape_string($conn, $_POST['prenume']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subiect = mysqli_real_escape_string($conn, $_POST['subiect']);
    $mesaj = mysqli_real_escape_string($conn, $_POST['mesaj']);

    $sql = "INSERT INTO contacts(nume, prenume, email, subiect, mesaj) VALUES ('" . $nume . "', '" . $prenume . "', '" . $email . ', '" . $subiect . "', '" . $mesaj .')";
    if(mysqli_query($conn, $sql)) {
      echo json_encode(array("status" => "true", "message" => "Datele au fost transmise!"));
    } else {
      echo json_encode(array("status" => "false", "message" => "Lipsesc datele!"));
    }
  }

  mysqli_close($conn); 
?>