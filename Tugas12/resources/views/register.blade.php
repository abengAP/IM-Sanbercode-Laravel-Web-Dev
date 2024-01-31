<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>

  <body>
    <h1>Buat Account Baru!</h1>
    <form action="/kirim" method="POST">
        @csrf
      <h3>Sign Up Form</h3>

      <label>First name:</label><br><br>
      <input name="firstname" type="text" required><br><br>
      <label>Last name:</label><br><br>
      <input name="lastname" type="text" required><br><br>

      <label>Gender:</label><br><br>
      <input type="radio" name="gender" value="Male">
      <label>Male</label><br>
      <input type="radio" name="gender" value="Female">
      <label>Female</label><br>
      <input type="radio" name="gender" value="Other">
      <label>Other</label><br><br>

      <label>Nationality:</label>
      <select name="negara" id="">
        <option value="id">Indonesian</option>
        <option value="mly">Malaysian</option>
        <option value="arb">Arabian</option>
        <option value="otr">Other</option>
      </select><br><br>

      <label>Language Spoken:</label><br><br>
      <input type="checkbox">Bahasa Indonesia <br>
      <input type="checkbox">English <br>
      <input type="checkbox">Other <br><br>

      <label>Bio:</label><br><br>
      <textarea placeholder="Text here . . ." cols="30" rows="10"></textarea><br>
      <input type="submit" value="Sign Up">

    </form>
  </body>

</html>
