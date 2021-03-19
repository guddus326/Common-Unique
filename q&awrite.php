<?php
//iploads디렉토리를 $uploaddir에 할당시키
//$uploadFile에 ./uploads/a.jpg를 할당시키기

include './db_conn.php';


$userid = $_GET['uid'];
$itemname = $_POST['itemname'];
$title = $_POST['title'];
$qnacate = $_POST['qnacate'];
$content = $_POST['content'];


$sql="insert into qna(userid,title,product,content,category)values('$userid','$title','$itemname','$content','$qnacate')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='size.php';</script>"); 


?>

