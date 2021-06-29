<?php
	include './db_conn.php';
	
	$userid = $_POST['id'];
    $userpw = $_POST['pass1'];
    $userpwc = $_POST['pass2'];
    $username = $_POST['name'];
    $usertel = $_POST['tel'];
    $useremail = $_POST['email'];

    if($userpw == $userpwc){

        $sql = "insert into user(userID, userPass, userName,userTel,userEmail) values('$userid','$userpw',' $username',' $usertel','$useremail')";
       
        mysqli_query($conn,$sql);
        mysqli_close($conn);

        echo("<script>location.href='index.php';</script>"); 
        
    } else{
	    echo "<script>alert('비밀번호가 맞지 않습니다.');history.back();</script>";
	}
  
?>


