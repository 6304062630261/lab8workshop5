<?php include "connect.php"?>
<html><head><meta charset="utf-8"></head>
<body>
<div style="display:inline-flex">
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
?>
<?php while ($row = $stmt->fetch()) : ?>
<div style="padding: 15px; text-align: center">
<a href="workshop5.php?username=<?=$row["username"]?>">
<img src="img//member_photo/<?=$row["username"] ?>.jpg" width="200">
</a><br>
<?=$row ["name"]?><br>
</div>
<?php endwhile; ?>
</div></body></html>