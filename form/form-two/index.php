
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    Name : <input type="text" name="user"><br>
    Password: <input type="passeword" name="password"><br>
    <input type="submit" name="send">

</form>
<?php
$user = $_POST['user'];
$pw=$_POST['password'];
$send = $_POST['send'];
if(isset($send))
{
  if(empty($user) && empty($pw))
    {echo 'Are you kidding me bro ?'."<br><img src='http://i0.kym-cdn.com/entries/icons/mobile/000/022/940/mockingspongebobbb.jpg' alt='-_-'>";}
  else if (empty($pw))
    {echo 'Le champs password est vide.';}
  else if(empty($user))
  {echo "Le champ user est vide.";}
  else{echo 'Welcome '.$user;}
}


?>
</body>
</html>
