<?
  require "db/connection.php"; // Подключение сессии и функционала
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/signUpIn.css">
</head>
<body>
  <div class="field_sign_up_in">
    <form method="POST">
      <input name='login' type="text" placeholder="username" />
      <input name="email" type="email" placeholder="email"/>
      <input name="password" type="password" placeholder="password"/>
      <input name="passwordRe" type="password" placeholder="password"/>
      <input name="signUp" type="submit" value="Check">
    </form>
  </div>
</body>
</html>
  <!--Форма регистрации
<div>
  <form method="POST">
    <input name='login' type="text" placeholder="username" />
    <input name="email" type="email" placeholder="email"/>
    <input name="password" type="password" placeholder="password"/>
    <input name="passwordRe" type="password" placeholder="password"/>
    <input name="signUp" type="submit" value="Check">
  </form>
</div>
  -->
<!-- Эта собака вылазила и портила внешний вид, поэтому живёт в комментах >>>>>>> b0af48dac3f269a947e300922768817db63820a4-->

<?
  $data = $_POST;
  $arrayOfData[0] = getFromAttribute($arrayOfData[0], 'login', 'users');
  $arrayOfData[1] = getFromAttribute($arrayOfData[1], 'password', 'users');
  if(isset($data['signUp'])) // При нажатии по кнопке Регистрация
  {
    $errors = array(); // Массив, который вмещает в себя недочеты пользователя
    $dataBoutUser;
    if(trim($data['login']) == '')
    {
      $errors[] = "Set your login";
    }
    foreach($arrayOfData[0] as $value)
    {
      if($data['login'] == $value)
      {
        $errors[] = "This login is already exist";
      }
    }
    if(trim($data['email']) == '')
    {
      $errors[] = "Set your email";
    }
    if(trim($data['password']) == '')
    {
      $errors[] = "Set your password";
    }
    if(trim($data['password']) != trim($data['passwordRe']))
    {
      $errors[] = "These passwords are not similar";
    }

    if(empty($errors)) // Если не наблюдалось ошибок, то заносятся данные в сессию и в БД
    {
      $dataBoutUser[] = $data['login'];
      $dataBoutUser[] = $data['password'];
      $dataBoutUser[] = $data['email'];
      $_SESSION['logged_user'] = $dataBoutUser;
      $mysqli->query("SET NAMES 'utf8'");
      $mysqli->query("INSERT INTO `users` (`login`, `password`, `email`, `xCode`, `rights`)
      VALUES ('".$data['login']."', '".$data['password']."', '".$data['email']."', 0, 'user')");
      echo '<script>document.location.href="index.php"</script>';
    }
    else
    {
      echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
  }
  // Это вообще кто-то читет!?
  $mysqli->close();
?>
