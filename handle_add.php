<?php require_once('./conn.php');
$title = $_POST['title'];
 $content = $_POST['content'];

if (empty($title) || empty($content) ) {
  die('empty');
 }
$sql = "INSERT INTO articles(title, content) VALUES('$title', '$content')";
echo $sql;
$result = $conn->query($sql);

if ($result) {
  header('Location: ./index.php');
 }
 else {
   die("failed. ". $conn->error);
 }
?>
