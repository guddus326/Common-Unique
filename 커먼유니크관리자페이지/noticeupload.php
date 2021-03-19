<?php
//iploads디렉토리를 $uploaddir에 할당시키
//$uploadFile에 ./uploads/a.jpg를 할당시키기

include './db_conn.php';

$title = $_POST['title'];
$content = $_POST['content'];


$sql="insert into board(title,content,userid)values('$title','$content','CM')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='index.php';</script>"); 


?>

