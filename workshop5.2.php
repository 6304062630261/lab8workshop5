<?php include "connect.php"?>
<html>
<head><meta charset="utf-8"></head>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute(); 
$row = $stmt->fetch(); 
?>
<div>
<div>
<img src="img/member_photo/<?=$row["username"]?>.jpg" width="200">
</div>
<div style="padding: 15px">
<h2><?=$row["name"]?></h2>
ที่อยู่:<?=$row["address"]?><br>
อีเมล:<?=$row["email"]?><br><br>
</div>
</div>
</body>
</html>