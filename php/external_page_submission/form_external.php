<form action="form_process.php" method="POST">
  <input type="text" name="username" placeholder="name">
  <br>
  <input type="password" name="password" placeholder="password">
  <br>
  <input type="submit" name='submit'>

</form>

<br><br>
<?php
  $files = scandir('.');
  echo "<ul>";
  foreach($files as $file) {
    echo "<li><a href='http://localhost:8000/external_page_submission/".$file."'>".$file."</a></li>";
  }
  echo "</ul>";
?>