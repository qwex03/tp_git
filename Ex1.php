<?php
$today = date("m.d.y");
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
   <h1>Mon fichier HTML</h1>
   <?php
      echo "<p>".$today."</p>";
   ?>
</body>
</html>