<?
  require "db/connection.php";
?>

<div>
  <form method="POST">
    <input name='login' type="text" placeholder="username" />
    <input name="password" type="password" placeholder="password"/>
    <input name="signIn" type="submit" value="Check">
  </form>
</div>

<?
$arrayOfData[0] = getFromAttribute($arrayOfData[0], 'login', 'users');
$arrayOfData[1] = getFromAttribute($arrayOfData[1], 'password', 'users');
$data = $_POST;
if(isset($data['signIn']))
{
  $checkLogin;
  for($i = 0; $i < count($arrayOfData[0]); $i++)
  {
    if($arrayOfData[0][$i] == $data['login'] && $arrayOfData[1][$i] == $data['password'])
    {
      $checkLogin = 1;
      $dataBoutUser[] = $arrayOfData[0][$i];
      $dataBoutUser[] = $arrayOfData[1][$i];
      print_r($dataBoutUser);
      break;
    }
    else
    {
      $checkLogin = 0;
    }
  }
  if($checkLogin)
  {
    $_SESSION['logged_user'] = $dataBoutUser;
    echo 'Win<script>document.location.href="index.php"</script>';
  }
  else
  {
    echo '<div style="color: red">You are not log in</div>';
  }
}
  $mysqli->close();
?>
