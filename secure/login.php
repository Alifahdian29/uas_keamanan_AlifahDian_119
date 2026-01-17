<?php
session_start();

// hash password untuk "12345"
$hashedPassword = password_hash("12345", PASSWORD_DEFAULT);

// hitung percobaan login
$_SESSION['attempt'] = $_SESSION['attempt'] ?? 0;
?>

<!DOCTYPE html>
<html>
<body>

<h3>Login (Versi Aman)</h3>

<form method="post">
  <input type="text" name="username" placeholder="Username"><br><br>
  <input type="password" name="password" placeholder="Password"><br><br>
  <button type="submit">Login</button>
</form>

<?php
if ($_POST) {
  $_SESSION['attempt']++;

  if ($_SESSION['attempt'] > 3) {
    echo "Login diblokir sementara";
  } else {
    if ($_POST['username'] == "admin" &&
        password_verify($_POST['password'], $hashedPassword)) {
      echo "Login aman berhasil";
      $_SESSION['attempt'] = 0;
    } else {
      echo "Login gagal";
    }
  }
}
?>

</body>
</html>
