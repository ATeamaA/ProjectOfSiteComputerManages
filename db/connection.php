<?
  session_start();
  $mysqli = new mysqli("localhost", "root", "", "ComputerConsuming");
	$mysqli->query("SET NAMES 'utf8'");
  function getFromDB($exampleDB)
	{
		while(($row = $exampleDB->fetch_assoc()) != false)
		{
			print_r($row);
		}
	}
	function getFromAttribute($getRow, $attribute, $table)
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
  function showProducts($title, $image, $description, $price, $producer)
  {
    echo '<div style="float: left; background-color: green; width: 300px; height: 400px; margin: 10px;">
            <h2>'.$title.'</h2>
            <img src= "'.$image.'" width: "100px" height="100px">
            <p>'.$description.'</p>
            <p>Price - '.$price.' ; Producer - '.$producer.'</p>
          </div>';
  }
?>
