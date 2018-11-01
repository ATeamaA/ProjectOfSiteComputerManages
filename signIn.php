<?
  require "db/connection.php"; // Подключение сессии и функционала
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign In</title>
  <link rel="stylesheet" href="css/signUpIn.css">
</head>
<body>
  <div class="field_sign_up_in">
<!--Форма авторизации-->
  <form method="POST">
    <input name='login' type="text" placeholder="username" />
    <input name="password" type="password" placeholder="password"/>
    <input name="signIn" type="submit" value="Check">
  </form>
</body>
</html>

<?
$arrayOfData[0] = getFromAttribute($arrayOfData[0], 'login', 'users');
$arrayOfData[1] = getFromAttribute($arrayOfData[1], 'password', 'users');
$data = $_POST;
if(isset($data['signIn'])) // При нажатии по кнопке Авторизация
{
  $checkLogin;
  for($i = 0; $i < count($arrayOfData[0]); $i++) //Данный цикл проверяет существуют ли такой логин
  {
    if($arrayOfData[0][$i] == $data['login'] && $arrayOfData[1][$i] == $data['password'])
    {
      $checkLogin = 1; // Данная переменная отвечает за то что цикл нашел успешно данные
      $dataBoutUser[] = $arrayOfData[0][$i];
      $dataBoutUser[] = $arrayOfData[1][$i];
      break;
    }
    else
    {
      $checkLogin = 0; // В данной ситуации ищет, либо вообще не нашел
    }
  }
  if($checkLogin) // Если нашел такие данные, то авторизация прошла успешно
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
