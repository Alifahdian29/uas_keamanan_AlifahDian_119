<?php
$allowed_files = [
  'about.php',
  'help.php'
];

if (isset($_GET['file']) && in_array($_GET['file'], $allowed_files)) {
  include $_GET['file'];
} else {
  echo "Akses ditolak";
}
?>
