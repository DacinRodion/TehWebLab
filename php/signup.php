<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Înregistrare</title>
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

   <div class="signup-box">
      <h1>Înregistrare</h1>
      <h4>Este gratis și îți va lua doar câteva minute!</h4>
      <form id="form" method="post" action="signupData.php">
         <label for="nume">Nume</label>
         <input type="text" placeholder="Nume" name="nume" id="nume"/>
         <label for="prenume">Prenume</label>
         <input type="text" placeholder="Prenume" name="prenume" id="prenume"/>
         <label for="email">Email</label>
         <input type="email" placeholder="Email" name="email" id="email"/>
         <label for="parola">Parola</label>
         <input type="password" placeholder="" name="parola" id="parola"/>
         <label for="confirmParola">Confirmați parola</label>
         <input type="password" placeholder="" name="confirmParola" id="confirmParola"/>
         <input type="submit" value="Înregistrare" />
      </form>
      <p class="Mesaj">
         Deja ai cont? <a href="login.php">Loghează-te aici</a>
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
        nume: {
          required: true
        },
        prenume: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        parola: {
          required: true,
          minlength: 8
        },
        confirmParola: {
          required: true,
          equalTo: "#parola"
        }
      },
      messages: {
        nume: 'Introduceti numele.',
        prenume: 'Introduceti prenumele.',
        email: {
          required: 'Introduceti adresa de Email.',
          email: 'Introduceti o adresa de Email valida.',
        },
        password: {
          required: 'Introduceti parola.',
          minlength: 'Parola trebuie sa contina minim 8 caractere.',
        },
        confirmPassword: {
          required: 'Confirmati parola.',
          equalTo: 'Parola confirmata nu corespunde Parolei introduse.',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>

</html>