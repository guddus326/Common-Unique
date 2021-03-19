<?php
	include './db_conn.php';
	$uid = $_GET["userid"];
    $sql = "select * from user where userID='".$uid."'";
    $result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	if($count==0)
	{
?>    
    <div style="display:flex;height:100%;justify-content:center;align-items:center">
        <?php echo $uid;?>는 사용가능한 아이디입니다.
    </div>



<?php 
	}else{
?>
    <div style="display:flex;height:100%;justify-content:center;align-items:center">
        <?php echo $uid;?>는 중복된아이디입니다.
    </div>


<?php
	}
?>
