<?php
include './db_conn.php';

$_idx=$_GET['idx']; //넘겨받은 아이디

$name = $_POST['itemname'];
$price = $_POST['itemprice'];
$category = $_POST['itemcategory'];
$explain = $_POST['itemexplain'];
$file_name1 = $_FILES['itempicture1']['name'];
$tmp_file1 = $_FILES['itempicture1']['tmp_name'];
$file_name2 = $_FILES['itempicture2']['name'];
$tmp_file2 = $_FILES['itempicture2']['tmp_name'];

$file_path1 = '커먼유니크관리자페이지/uploads/'.$file_name1;
$file_path2 = '커먼유니크관리자페이지/uploads/'.$file_name2;

move_uploaded_file($tmp_file, $file_path1);
move_uploaded_file($tmp_file, $file_path2);


$query="update item set itemname='$name', itemprice='$price',itemcategory='$category', itemexplain='$explain', 
itempicture='$file_path1', itempicturedetail='$file_path2' where id=$_idx";

mysqli_query($conn,$query);

echo "<script>alert('수정되었습니다.'); location.href='itemmanagement.php';</script>";

?>
