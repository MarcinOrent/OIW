<link rel="stylesheet" href="style.css" />
<form action="dwa.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="Imie"><b>Imie</b></label>
    <input type="text" placeholder="Podaj imie" name="imie" required>

<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Podaj Email" name="email" required>

    <label for="haslo"><b>Haslo</b></label>
    <input type="haslo" placeholder="Podaj Haslo" name="haslo" required>
    <hr>

    <button type="submit" value="Dodaj">Zarejestruj</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>