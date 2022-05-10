<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	<title>失蹤人口資料登入</title>
	<style>
		#sitebody {
			width: 600px;
			margin: 0 auto;
			font-size: 13px;
			text-align: center;
		}
		#header {
			background-color: #FFD04D;
			height: 80px;
			width: 100%;
			text-align: center;
			line-height: 80px;
		}
		#photo{
			font-size: small;
			color: red;
			font-size: 15px;
		}
		#table{
			width: 800;
			border: 0;
			align-items:center;
			padding: 4;
			vertical-align: top;
		}
		#body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
	</style>
</head>
<body width=1526px height=1070px background="./example/bg-5.png">
<?php
echo "<p id=header><font size=15><B>失蹤人口尋回系統</font></p>";
echo "<p id=sitebody><font size=5>線上報案</font></p>";
echo "<form action='submit.php' method=post enctype=multipart/form-data >";
echo"<hr size=1><p id=table><strong>報案人姓名:<input type=text maxlength=10 name=reporter /></strong></p>";
echo"<p><strong>性別:<input type=text maxlength=3 name=reporter_sex /></strong></p>";
echo"<p><strong>身份證字號:<input type=text maxlength=10 name=reporter_id /></strong></p>";
echo"<p><strong>電話:<input type=text maxlength=10 name=reporter_phone /></strong></p>";
echo"<p><strong>關係:<input type=text maxlength=10 name=reporter_relation /></strong></p>";
echo"<p><strong>信箱:<input type=text maxlength=30 name=reporter_email /></strong></p>";
echo"<p><strong>失蹤人姓名:<input type=text maxlength=10 name=missing_p /></strong></p>";
echo"<p><strong>性別:<input type=text maxlength=3 name=missing_p_sex /></strong></p>";
echo"<p><strong>身份證字號:<input type=text maxlength=10 name=missing_p_id /></strong></p>";
echo"<p><strong>出生年月日:<input type=text maxlength=8 placeholder=例:1990-12-16 name=missing_p_birthday /></strong></p>";
echo"<p><strong>照片上傳：<input type=file name=upload></strong>
<p id=photo>!!! 請注意照片檔名或壓縮檔名為失蹤人身份證後4碼 !!!</br>
可上傳多張照片，僅限壓縮檔上傳!!</p>";
echo"<a href=example.php>照片範例</a></br>";
echo "<hr size=1><p align=center><input type=reset name=reset value=重新輸入>
 <input type=submit name=submit value=送出></p>";
echo "</form>";
?>
</body>
</html>