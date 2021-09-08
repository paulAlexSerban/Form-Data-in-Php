This the main page

<?php
  $files = scandir('.');
  echo "<ul>";
  foreach($files as $file) {
    echo "<li><a href='http://localhost:8000/".$file."'>".$file."</a></li>";
  }
  echo "</ul>";
?>

