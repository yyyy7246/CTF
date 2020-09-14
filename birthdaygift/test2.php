<html lang="ko">

<head>
	<meta charset="UTF-8">
</head>

<body>

	<h1>내 생일은 2020년 12월 31일 </h1>
	<h1>생일을 전송 시켜 주세요!</h1>

	<form method="POST" action="test2.php">
  </br></br>
		<input type="date" name="birthday" min="1950-01-01" max="1999-12-31">
		<input type="submit" value="전송">
  </br></br>
    <?php
		if(isset($_POST['birthday']) == false){$_POST['birthday'] = '';}
    echo '생일:';
    echo $_POST['birthday'];
    ?>
	</form>
</br></br></br>
<?php
  if($_POST['birthday'] == "2020-12-31"){
    echo "<script>alert(\"이젠 생일 선물을 골라줘\");</script>";
    echo "http://127.0.0.1/gift.php";
  }
 ?>
</body>

</html>
