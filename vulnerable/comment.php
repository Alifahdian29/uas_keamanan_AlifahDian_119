<!DOCTYPE html>
<html>
<head>
  <title>Komentar Rentan</title>
</head>
<body>

<h3>Form Komentar (Rentan XSS)</h3>

<form method="post">
  <textarea name="comment" rows="4" cols="40"></textarea><br><br>
  <button type="submit">Kirim</button>
</form>

<?php
if ($_POST) {
  echo "<p>Komentar:</p>";
  echo $_POST['comment'];
}
?>

</body>
</html>
