<?php
//iploads디렉토리를 $uploaddir에 할당시키
//$uploadFile에 ./uploads/a.jpg를 할당시키기

include './db_conn.php';

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

$sql="insert into item(itemname,itemcategory,itemprice,itemexplain,itempicture,itempicturedetail)values('$name','$category','$price','$explain','$file_path1','$file_path2')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='index.php';</script>"); 


?>

