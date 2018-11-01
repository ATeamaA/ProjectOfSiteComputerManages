<?
  require "db/connection.php"; // Подключение сессии и функционала
?>

<!--Форма администратора, а в частности добавление элементов-->
<form method="POST">
  <input name="title" type="text" placeholder="title" />
  <input name="image" type="file" placeholder="image" />
  <input name="description" type="text" placeholder="description" />
  <input name="price" type="text" placeholder="price" />
  <input name="producer" type="text" placeholder="producer" />
  <input name="addElement" type="submit" value="addElement" />
</form>
<hr>

<?
  /*
    В данном участке кода проверяется событие добавление данных путем заполнения и нажатия по кнопке
  */
  $data = $_POST;
  if(isset($data['addElement']) and
      trim($data['title']) != "" and
      trim($data['image']) != "" and
      trim($data['description']) != "" and
      trim($data['price']) != "" and
      trim($data['producer']) != "")
  {
    $mysqli->query("INSERT INTO `Product` (`title`, `image`, `description`, `price`, `producer`, `type`)
    VALUES ('".$data['title']."', 'img/imgForElements/".$data['image']."', '".$data['description']."',
            '".$data['price']."', '".$data['producer']."', 'Notebook')");
  }
?>


<?
  /*
    Здесь выводится все товары с БД
  */
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
