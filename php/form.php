<?php

  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $min = 4;
    $names = array('Peter', 'Edwin', 'Samid', 'Maria', 'Jane');

    if(strlen($username) > $min) {
      echo 'Username has to be longer than four <br>';
    }

    if(!in_array($username, $names)) {
      echo "Sorry, you cannot, login!";
    } else {
      echo "Welcome";
    }
  }

?>


<form action="form.php" method="POST">
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
    echo "<li><a href='http://localhost:8000/".$file."'>".$file."</a></li>";
  }
  echo "</ul>";
?>
