<?php
	$conn=mysqli_connect('localhost','test','1111','testdb');

	
	$c_name = $_POST['c_name'];
    $major = $_POST['major'];
    $meet = $_POST['meet'];
    $people = $_POST['people'];
    $people_name = $_POST['people_name'];
    $position = $_POST['position'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    $sql = "insert into company(company_name, interest , meet  ,count  ,name  ,degree ,tel,email) 
                        values('$c_name','$major',' $meet',' $people','$people_name','$position','$tel','$email')";
       
    mysqli_query($conn,$sql);
    mysqli_close($conn);

    echo("<script>location.href='form.php';</script>"); 



?>