This the main page

<?php
  $files = scandir('.');
  echo "<ul>";
  foreach($files as $file) {
    echo "<li><a href='http://localhost:8000/external_page_submission/".$file."'>".$file."</a></li>";
  }
  echo "</ul>";
?>

