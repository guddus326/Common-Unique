<?php
include './db_conn.php';

$itemname = $_POST['itemname'];
$title = $_POST['title'];
$qnacate = $_POST['qnacate'];
$content = $_POST['content'];


$sql="insert into qna(userid,title,product,content,category)values('CM','$title','$itemname','$content','$qnacate')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='qnashow.php';</script>"); 


?>

