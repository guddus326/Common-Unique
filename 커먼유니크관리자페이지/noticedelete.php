<?php
include './db_conn.php';
$idx=$_GET['idx'];

$sql="delete from board where id='$idx'";
mysqli_query($conn,$sql);

echo "<script>alert('삭제되었습니다');location.href='noticeshow.php';</script>";

?>
