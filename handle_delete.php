<?php require_once('./conn.php');
$title = $_POST['title'];
if (empty($title)) {
    header('Location: ./index.php');
    die('empty');
 }
$sql = "DELETE FROM articles WHERE title =".$title;
echo $sql;
$result = $conn->query($sql);

if ($result) {
  echo "刪除成功";
  header('Location: ./index.php');
 }
 else {
   die("failed. ". $conn->error);
 }
?>
