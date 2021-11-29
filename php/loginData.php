<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Înregistrare</title>
   <link rel="stylesheet" href="../css/style.css">
</head>

<body onload="Cookies()">
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

      $email = $_REQUEST['email'];
      $parola = sha1($_REQUEST['parola']);
    
      $sql = "SELECT * FROM users WHERE email = '$email' AND parola = '$parola'";

      if(mysqli_query($conn, $sql)){
         echo "Logarea s-a produs cu succes.";
      }
    
      mysqli_close($conn);
    ?>
   </div>
</body>

</html>