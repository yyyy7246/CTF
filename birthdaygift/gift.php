<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <h2>99.9퍼센트로 꽝, 0.01퍼센트로 선물 당첨인 룰렛.</h2>
</br>
  <h2> 당첨시켜주세요.</h2>
</br>
<form method="GET" action="gift.php">
<input type = "text" name='control' maxlength="1" onKeyup="this.value=this.value.replace(/[^1-3]/g,'');" />
<input type = 'hidden' name='dolimnum'>
<?php
  echo '룰렛 돌리기 1, 멈추기 2, 초기화면 3';
  if(isset($_GET['control']) == 0){
    $_GET['control'] = 3;
  }
  if($_GET['control'] == 1){
  echo "<img src = 'roulette.gif'/>";
  }
  if($_GET['control'] == 2){
    $_GET['dolimnum'] = mt_rand(1,10000);
  }

if(isset($_GET['dolimnum']) == 1){
  if($_GET['dolimnum'] >= 1 and $_GET['dolimnum'] <= 3330){
    echo "<img src = 'bbangbbange2.jpg'/>";
    echo "<br><br><br>";
    echo "<font size=50>꽝";
    echo "<br>";
    echo $_GET['dolimnum'];
  }
  if($_GET['dolimnum'] >= 3331 and $_GET['dolimnum'] <= 6660){
    echo "<img src = 'bbangbbange3.jpg'/>";
    echo "<br><br><br>";
    echo "<font size=50>꽝";
    echo "<br>";
    echo $_GET['dolimnum'];

  }
  if($_GET['dolimnum'] >= 6661 and $_GET['dolimnum'] <= 9990){
    echo "<img src = 'bbangbbange4.jpg'/>";
    echo "<br><br><br>";
    echo "<font size=50>꽝";
    echo "<br>";
    echo $_GET['dolimnum'];
  }
  if($_GET['dolimnum'] >= 9991 and $_GET['dolimnum'] <= 10000){
    echo "<img src = 'dangchum.jpg'/>";
    echo "<br><br><br>";
    echo "<font size=50>DCTF{0_01_DANGCHUM}";
    echo "<br><br><br>";
  }
}



  if($_GET['control'] == 3){
    echo "<img src = 'roulette.jpg'/>";
  }
?>

<!--
  echo '룰렛 돌리기 1, 멈추기 2, 초기화면 3';
  if(isset($_GET['control']) == 0){
    $_GET['control'] = 3;
  }
  if($_GET['control'] == 1){
  echo "<img src = 'roulette.gif'/>";
  }
  if($_GET['control'] == 2){
    $_GET['dolimnum'] = mt_rand(1,10000);
  }
 ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
 hint : 1=<$_GET['dolimnum']=<10000
-->


</body>
</br>


</html>
