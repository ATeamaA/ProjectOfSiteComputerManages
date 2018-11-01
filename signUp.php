<?
  require "db/connection.php";
?>
<div>
  <div>
    <form method="POST">
      <input name='login' type="text" placeholder="username" />
      <input name="password" type="password" placeholder="password"/>
      <input name="email" type="email" placeholder="email"/>
      <input name="signUp" type="submit" value="Check">
    </form>
  </div>
</div>
<?
  $data = $_POST;
  $arrayOfData[0] = getFromAttribute($arrayOfData[0], 'login');
  $arrayOfData[1] = getFromAttribute($arrayOfData[1], 'password');
  if(isset($data['signUp']))
  {
    $errors = array();
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

    if( empty($errors))
    {
      $dataBoutUser[] = $data['login'];
      $dataBoutUser[] = $data['password'];
      $_SESSION['logged_user'] = $dataBoutUser;
      $mysqli->query("SET NAMES 'utf8'");
      $mysqli->query("INSERT INTO `users` (`login`, `password`, `email`, `xCode`, `rights`) VALUES ('".$data['login']."', '".$data['password']."', '".$data['email']."', 0, 'user')");
      echo '<div style="color: green;">You have done registeration</div>';
    }
    else
    {
      echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
  }
?>
