<!DOCTYPE html>
<html>
<head>
  <title>Login Rentan</title>
</head>
<body>

<h3>Login (Versi Rentan)</h3>

<form method="post">
  Username:<br>
  <input type="text" name="username"><br><br>

  Password:<br>
  <input type="password" name="password"><br><br>

  <button type="submit">Login</button>
</form>

<?php
if ($_POST) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == "admin" && $password == "12345") {
    echo "<p>Login berhasil</p>";
  } else {
    echo "<p>Login gagal</p>";
  }
}
?>

</body>
</html>
