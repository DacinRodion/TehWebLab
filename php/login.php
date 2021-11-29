<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Logare</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
   <link rel="stylesheet" href="../css/style-form.css" />
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

   <div class="login-box">
      <h1>Logare</h1>
      <form id="form" method="post" action="loginData.php">
         <label>Email</label>
         <input type="email" placeholder="" />
         <label>Parola</label>
         <input type="parola" placeholder="" />
         <input type="submit" value="Logare" />
      </form>
      <p class="Mesaj">
         Nu ai cont? <a href="signup.php">Înregistrează-te aici</a>
      </p>
   </div>

</body>

<style>
  .error {
    color: red;
  }
</style>

<script>
  $(document).ready(function () {
    $('#form').validate({
      rules: {
        email: {
          required: true,
          email: true
        },
        parola: {
          required: true,
          minlength: 8
        }
      },
      messages: {
        email: {
          required: 'Introduceti adresa de Email.',
          email: 'Introduceti o adresa de Email valida.',
        },
        password: {
          required: 'Introduceti parola.',
          minlength: 'Parola trebuie sa contina minim 8 caractere.'
        },
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>

</html>