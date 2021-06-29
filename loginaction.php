
<?php
include './db_conn.php';
session_start();

$user_id=$_POST['userid'];
$user_passwd=$_POST['userpw'];

$sql="select *  from user where userID='$user_id' and userPass='$user_passwd'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count>0){
    $_SESSION['userid']=$user_id;
    $_SESSION['userpass']=$user_passwd;
    
    echo "<meta http-equiv='refresh'content='0;url=index.php'>";
}else{
    echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');history.go(-1);</script>";
}
