<!doctype = html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
$my_nam = htmlspecialchars($_POST["n"],ENT_QUOTES);
$my_mes = htmlspecialchars($_POST["m"],ENT_QUOTES);
$db = new PDO('mysql:host=localhost;port=3307;dbname=phptra;charset=utf8','root','root');
$db->query("insert into tbl (seq,name,msg,date) values (NULL,'$my_nam','$my_mes',NOW())");
print "成功";

print "<p><a href = 'sns.php'>一覧へ</a></p>";
?>

</body>
</html>
