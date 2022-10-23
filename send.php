<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if(isset($_POST["criteria"])){
      $criteria =$_POST["criteria"];
      var_dump($criteria);
      echo "Desde el servidor";
  }
  ?>
</body>

</html>