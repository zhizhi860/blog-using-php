<?php require_once("./conn.php");
  $sql = "SELECT * FROM ariticles";
  $result = $conn->query($sql);
?>
<!doctype html5>
<html>
<head>
 <meta charset="UTF-8">
 <title>BLOG 部落格123</title>
</head>
 <body>
 <h1>新增文章</h1>
<form action="handle_add.php" method="post">
    <div>標題：<input type="text" name="title" /></div>
    <div>內容：<textarea type="text" name="content"></textarea></div>
    <input type="submit" />
</form>
</body>
</html>
