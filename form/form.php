<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="index.php" method="post">
    FirstName :<input type="text" name="firstname" value=""><br>
    Lastname :<input type="text" name="lastname" value=""><br>
    Are you un gamer ? <input type="radio" name="gamer"value="yes" >Yes<input type="radio" name="gamer" value="nope">Nope<br>
    <input type="submit" value="Send"><br>
    </form>
    <!--Form with some references ;) -->
    <?php
    $firstname =  $_POST['firstname'];
    $lastname = $_POST['lastname'] ??$lastname="";
    $gamer =  $_POST['gamer'];
    if(isset($firstname) && isset($gamer))
    {
      if($gamer === "yes")
      {$gamerAnswer ="You're a gamer ♥ ";}
      else {$gamerAnswer ="You're not a gamer get out on my way -_- .";}

      if($firstname === 'snake' || $lastname ==="snake")
      {echo'Hello '.$firstname.' '.$lastname.'. '."Are you a sssnake ? :3";}
      else if($firstname === 'Horde' || $lastname ==="Horde")
      {echo'FOR THE HORDE ! ';}
      else if(($firstname === 'Thomas' && $lastname ==="Deruel")&& $gamer ==="yes")
      {echo"It's meeee ! ;) ";}
      else if(($firstname === 'Thomas' && $lastname ==="Deruel")&& $gamer ==="nope")
      {echo"Whaaaaaaaaat ? How is possible ? You've the same name as me but you're not a geek, SHAME ON YOU /spit";}
      else if((strlen($firstname) >10) || (strlen($lastname) >10))
      {
        echo 'Hello, ehh ... mister/miss IhaveAlongNameLoooL';
      }
      else if(is_numeric($firstname)|| is_numeric($lastname))
      {echo "Are you a Robot ?";}
      else if($firstname==='Undertale' || $lastname==='Undertale')
      {echo "<style>html{background:black;color:white;}</style>+<img src='http://ekladata.com/C8WdvoGSCn0Sjv12Lg1nsHPcYUk.jpg' alt='undertale'>";}
      else{echo 'Hello '.$firstname.' '.$lastname.'. '.$gamerAnswer;}
    }
     ?>
  </body>
</html>
