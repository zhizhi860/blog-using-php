<!DOCTYPE html5>
<html>
<head>
  <meta charset="UTF-8">
  <title>Blog123</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="nav">
    <h1>BLOG</h1>
    <a class="active" href="./index.php">首頁</a>
    <a href="./about.php">關於我</a>
  </nav>
  <div class="container">
    <div class="articles">
      <div class="article">
        <?php require_once('.\conn.php');
        $sql ="SELECT * FROM articles";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<div class='article'>";
            echo   "<h1><a href='./article.php'>
              $row[title]</a></h1>";
              echo   "<h1><a href='./article.php'>
                $row[content]</a></h1>";
            echo "</div>";
          }
        }
        else {
          echo "<div class='nothing'>";
          echo "這裡空蕩蕩的~<br>來寫點東西吧༼凸 ◉_◔༽凸";
          echo "</div>";
        }
      ?>
      </div>
    </div>

    <div>
      <form action=".\add.php">
        <input type="submit" value="新增文章">
      </form>
      <form action=".\delete.php">
        <input type="submit" value="刪除文章">
      </form>
    </div>

</div>
</body>
</html>
