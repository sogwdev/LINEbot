<!doctype = html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form action ="sns2.php" method="post">
名前
<div><input type="text" name = "n"></div>
メッセージ
<div><textarea name = "m"></textarea></div>
<input type = "submit" value = "送信">
</form>

<?php
$db = new PDO('mysql:host=localhost;port=3307;dbname=phptra;charset=utf8','root','root');
$ps = $db->query("SELECT * FROM tbl");
while ($r = $ps->fetch()){
print "{$r['seq']} {$r['name']} {$r['date']} {$r['msg']}<hr>";}
?>
</body>
</html>
