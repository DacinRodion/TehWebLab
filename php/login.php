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
         <input type="email" name="email" id="email" placeholder="" />
         <label>Parola</label>
         <input type="password" name="parola" id="parola" placeholder="" />
         <input type="submit" value="Logare" />
         <div class="msg" id="msg"></div>
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
          email: 'Introduceti o adresa de Email valida.'
        },
        parola: {
          required: 'Introduceti parola.',
          minlength: 'Parola trebuie sa contina minim 8 caractere.'
        }
      },
      submitHandler: function (form, event) {
        event.preventDefault();
        var email = $("#email").val();
        var parola = $("#parola").val();

        $.ajax ({
          type: "POST",
          url: "loginData.php",
          data: { "email":email, "parola":parola, },
          datatype: "html",
          cache: false,
          success: function (data) {
            console.log(data);
            $('#msg').html("<h2>Datele se controleaza...</h2>");
          }
        });
        return false;
      }
    });
  });
</script>

</html>