<?
  session_start(); // Открытие сессии
  $mysqli = new mysqli("localhost", "root", "", "ComputerConsuming");
	$mysqli->query("SET NAMES 'utf8'");
  function getFromDB($exampleDB) // Данная функция берет все данные с БД
	{
		while(($row = $exampleDB->fetch_assoc()) != false)
		{
			print_r($row);
		}
	}
	function getFromAttribute($getRow, $attribute, $table) // Данная функция берет отдельно с какого именного свойства
	{
		global $mysqli;
		$exampleDB = $mysqli->query("SELECT `".$attribute."` FROM `".$table."` ORDER BY `id`");
		while(($row = $exampleDB->fetch_assoc()) != false)
		{
			$getRow[] = $row[$attribute];
			$i++;
		}
		return $getRow;
	}
  /*
    Данная функция показывает все товары в фиксированных блоках
  */
  function showProducts($title, $image, $description, $price, $producer)
  {
    echo '<div style="float: left; background-color: green; width: 300px; height: 450px; margin: 10px;">
            <h2 style="margin: 10px">'.$title.'</h2>
            <img style="margin: 10px" src= "'.$image.'" width: "100px" height="100px">
            <p align="justify" style="margin: 10px">'.$description.'</p>
            <p align="justify" style="margin: 10px">Price - '.$price.' ; Producer - '.$producer.'</p>
          </div>';
  }
  /*
    Данная функция отвечает за показ именно группировок товаров
  */
  function showTypesOfProducts($title, $image)
  {
    echo '<div class="window_one">
            <img src="'.$image.'" alt="'.$title.'">
          </div>';
  }

  function showMessages($topic, $message, $login)
  {
    echo '<div style="float: left; background-color: red; width: 300px; height: 250px; margin: 10px; ">
            <h2 style="margin: 10px">'.$topic.'</h2>
            <p align="justify" style="margin: 10px">'.$message.'</p>
            <p style="margin: 10px">Кто отправил - '.$login.'</p>
            <input style="margin: 10px" type="submit" value="Натравить собак" />
          </div>';
  }
?>
