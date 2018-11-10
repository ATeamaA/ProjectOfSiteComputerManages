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
    <input name="message" type="textarea" placeholder="Сообщение"/>
    <input name="sendMessage" type="submit" value="Check">
  </form>
</body>


<?
  if(isset($_POST['sendMessage']))
  {
    
  }
?>
