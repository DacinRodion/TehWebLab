<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Înregistrare</title>
   <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="menu">
      <a href="../pagini/romania.html">România</a>
      <a href="../pagini/capitala.html">București</a>
      <a href="../pagini/drapel.html">Draprel</a>
      <a href="../pagini/stema.html">Stema</a>
      <a href="login.php">Logare</a>
      <a href="signup.php">Înregistrare</a>
      <a href="contact.php">Contact</a>
    </div>

   <div class="wrapper text">

    <?php
    
      $conn = mysqli_connect("localhost", "root", "", "tehweb");

      if($conn === false){
        die("EROARE: Nu s-a putut conecta."
          . mysqli_connect_error());
      }

      $nume = $_REQUEST['nume'];
      $prenume = $_REQUEST['prenume'];
      $email = $_REQUEST['email'];
      $subiect = $_REQUEST['subiect'];
      $mesaj = $_REQUEST['mesaj'];
    
      $sql = "INSERT INTO contacts  VALUES ('$nume', '$prenume', '$email', '$subiect', '$mesaj')";
    
      if(mysqli_query($conn, $sql)){
        echo "Mesajul a fost trimis cu succes.";
      } else {
        echo "Ceva a mers gresit."
          . mysqli_error($conn);
      }
    
      mysqli_close($conn); 
    ?>
   </div>
</body>