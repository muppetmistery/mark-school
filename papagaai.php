<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>papagaai</title>
</head>
<body>
  <form action="" method="post">
    type your text here<input type="text" name="input"> <br>
    <input type="submit" name="submit" value="praat me na">
  </form>

  <?php

  if( isset( $_POST['submit'] ) ){
    if (!($_POST['input'])=="") {
      echo "U zegt: " . $_POST['input'];
    }
  else{
    echo "wat is het stil";

  }
  }

  ?>

</body>
</html>
