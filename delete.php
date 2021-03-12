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
 <h1>刪除文章</h1>
<form action="handle_delete.php" method="post">
    <div>欲刪除之標題：<input type="text" name="title" /></div>
    <input type="submit" />
</form>
</body>
</html>
