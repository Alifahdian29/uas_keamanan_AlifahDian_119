<!DOCTYPE html>
<html>
<head>
  <title>Komentar Aman</title>
</head>
<body>

<h3>Form Komentar (Versi Aman)</h3>

<form method="post">
  <textarea name="comment" rows="4" cols="40"></textarea><br><br>
  <button type="submit">Kirim</button>
</form>

<?php
if ($_POST) {
  echo "<p>Komentar:</p>";
  echo htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');
}
?>

</body>
</html>
