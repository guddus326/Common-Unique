<?php
include './db_conn.php';

$_idx=$_GET['idx']; //넘겨받은 아이디

$title = $_POST['title'];
$content = $_POST['content'];



$query="update board set title='$title', content='$content' where id=$_idx";

mysqli_query($conn,$query);

echo "<script>alert('수정되었습니다.'); location.href='noticeshow.php';</script>";

?>
