<html>
<head>
  <meta charset="utf-8">
</head>
  <body>
    <h1>어딘가 이상한 업 다운 게임</h1>
  </br>
    </body>
    <h2>수를 입력하세요.</h2></br>

  <form method="GET" action="test.php">
      수: <input type="text" name="inputnum" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');"/><br/>
      <?php
        if(isset($_GET['inputnum']) == false){$_GET['inputnum'] = '';}
      echo "입력된 수: ".$_GET['inputnum']."<br/>";
      $num = $_GET['inputnum']
      ?>
      <?php
      if(isset($_GET['inputnum']) == false){$_GET['inputnum'] = 0;}
      if(isset($_COOKIE['dange']) == false){setcookie("dange","1");}
      ?>
<?php
echo '단계:';
echo $_COOKIE['dange'];
?>
</br>
<?php
echo '수 범위: 1~10';
?>
</br></br></br>

<?php
  $randnum = mt_rand(1, 10);
  echo '정답이였던 수: ';
  echo $randnum;
  $plusnum = $_COOKIE['dange'] + 1;
  ?>
</br></br>
  <?php
  if ($randnum > $num){
    echo 'Up';
  }

  elseif ($randnum < $num){
    echo 'Down';
  }

  elseif ($randnum == $num){
    setcookie("dange","$plusnum");
    echo 'correct';
    echo "<script>alert(\"다음 스테이지\");</script>";
    $_GET['inputnum'] = NULL;
    header('Refresh: 0');
  }
?>
</br>
  <?php
  if ($_COOKIE['dange'] < 172){
    echo 'Up';
  }
  elseif ($_COOKIE['dange'] > 172){
    echo 'Down';
  }
  elseif ($_COOKIE['dange'] == 172){
    echo 'DCTF{MY_KEY_IS_172CM}';
  }
?>

  </html>
