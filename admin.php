<?
  require "db/connection.php"; // Подключение сессии и функционала
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <link rel="stylesheet" href="css/adnim.css">
</head>
<body>

</body>
</html>
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
<h2>Изменение параметров:</h2>
<form method="POST">
  <input name="logo" type="file" placeholder="logo" />
  <input name="WorkingDays" type="text" placeholder="Рабочие дни:"/>
  <input name="phoneNumber" type="text" placeholder="Номер телефона"/>
  <input name="addData" type="submit" value="addElement" />
</form>
<hr>


<?
  $data = $_POST;
  if(isset($data['addData']) and trim($data['logo']) != "" )
  {
    print_r("'img/logo/".$data['logo']."'");
    $mysqli->query("UPDATE `dataBoutStation` SET `logo` = 'img/logo/".$data['logo']."' WHERE `dataBoutStation`.`id` = 1;");
  }
  if(isset($data['addData']) and trim($data['WorkingDays']) != "" )
  {
    $mysqli->query("UPDATE `dataBoutStation` SET `workDays` = '".$data['WorkingDays']."' WHERE `dataBoutStation`.`id` = 1;");
  }
  if(isset($data['addData']) and trim($data['phoneNumber']) != "" )
  {
    $mysqli->query("UPDATE `dataBoutStation` SET `phoneNumber` = '".$data['phoneNumber']."' WHERE `dataBoutStation`.`id` = 1;");
  }
?>



<?
  $arrayOfDataM[0] = getFromAttribute($arrayOfDataM[0], 'topic', 'inbox');
  $arrayOfDataM[1] = getFromAttribute($arrayOfDataM[1], 'message', 'inbox');
  $arrayOfDataM[2] = getFromAttribute($arrayOfDataM[2], 'login', 'inbox');
  for($i = 0; $i < count($arrayOfDataM[0]); $i++)
  {
    showMessages($arrayOfDataM[0][$i], $arrayOfDataM[1][$i], $arrayOfDataM[2][$i]);
  }
?>

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
            '".$data['price']."', '".$data['producer']."', 'Ультрабуки')");
  }
?>
