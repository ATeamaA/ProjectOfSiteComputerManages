<?
  require "db/connection.php";
?>


<?
  $arrayOfData[0] = getFromAttribute($arrayOfData[0], 'title', 'Product');
  $arrayOfData[1] = getFromAttribute($arrayOfData[1], 'image', 'Product');
  $arrayOfData[2] = getFromAttribute($arrayOfData[2], 'description', 'Product');
  $arrayOfData[3] = getFromAttribute($arrayOfData[3], 'price', 'Product');
  $arrayOfData[4] = getFromAttribute($arrayOfData[4], 'producer', 'Product');
  for($i = 0; $i < count($arrayOfData[0]); $i++)
  {
    showProducts($arrayOfData[0][$i], $arrayOfData[1][$i], $arrayOfData[2][$i], $arrayOfData[3][$i], $arrayOfData[4][$i]);
  }
  for($i = 0; $i < count($arrayOfData[0]); $i++)
  {
    showProducts($arrayOfData[0][$i], $arrayOfData[1][$i], $arrayOfData[2][$i], $arrayOfData[3][$i], $arrayOfData[4][$i]);
  }
  for($i = 0; $i < count($arrayOfData[0]); $i++)
  {
    showProducts($arrayOfData[0][$i], $arrayOfData[1][$i], $arrayOfData[2][$i], $arrayOfData[3][$i], $arrayOfData[4][$i]);
  }
  for($i = 0; $i < count($arrayOfData[0]); $i++)
  {
    showProducts($arrayOfData[0][$i], $arrayOfData[1][$i], $arrayOfData[2][$i], $arrayOfData[3][$i], $arrayOfData[4][$i]);
  }
  $mysqli->close();
?>
<a href="signUp.php">Link</a>
