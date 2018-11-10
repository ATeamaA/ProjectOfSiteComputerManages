<?
  require 'db/connection.php';
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
    <input name='title' type="text" placeholder="Заголовок" />
    <input class="message" name="message" type="textarea" placeholder="Сообщение"/>
    <input name="sendMessage" type="submit" value="Отправить">
  </form>
</div>
</body>


<?
  if(isset($_POST['sendMessage']))
  {
    if(isset($_SESSION['logged_user']))
    {
      $mysqli->query("INSERT INTO `inbox` (`topic`, `message`, `login`)
      VALUES ('".$_POST['title']."', '".$_POST['message']."', '".$_SESSION['logged_user'][0]."')");
    }
    else
    {
      $mysqli->query("INSERT INTO `inbox` (`topic`, `message`, `login`)
      VALUES ('".$_POST['title']."', '".$_POST['message']."', 'Stranger')");
    }
    echo '<script>document.location.href="index.php"</script>';
  }
?>
