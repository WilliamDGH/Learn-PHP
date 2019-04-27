<?php
# GET
  // if (isset($_GET['name'])) {
  //   $name = htmlentities($_GET['name']);
  //   echo $name;
  // }

  # POST

  // if (isset($_POST['name'])) {
  //   $name = htmlentities($_POST['name']);
  //   echo $name;
  // }

  # REQUEST

  if (isset($_REQUEST['name'])) {
    $name = htmlentities($_REQUEST['name']);
    echo $name;
  }

  echo $_SERVER['QUERY_STRING'];

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My WebSite</title>
  </head>
  <body>
    <form action="get_post.php" method="POST">
      <div>
        <label>Name</label>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</label>
        <input type="text" name="email">
      </div>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
