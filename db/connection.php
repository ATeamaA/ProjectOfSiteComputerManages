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
	function getFromAttribute($getRow, $attribute)
	{
		global $mysqli;
		$exampleDB = $mysqli->query("SELECT `".$attribute."` FROM `users` ORDER BY `id`");
		while(($row = $exampleDB->fetch_assoc()) != false)
		{
			$getRow[] = $row[$attribute];
			$i++;
		}
		return $getRow;
	}
?>
