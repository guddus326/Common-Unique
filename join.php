<?php
include './navbar.php';
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>커먼유니크</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/item.css" rel="stylesheet">
    <link href="css/join.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,800&display=swap" rel="stylesheet">
    <style>
      h1{
        font-family: 'Playfair Display', serif;
      }
    </style>
  </head>
  <body>
      <div style="margin-left:auto;margin-right:auto;">
        <div class="page-header" style="text-align:center;">
            <h1>join us</h1>
        </div>
        <img width="100%";height="auto"; src="./img/회원가입.png">
        <div class="col-sm-150"><br>
          <h4>회원가입</h4>

          <form class="login-form" action="joinaction.php" method="post">
            <table class="table table-boardered">
              <tr>
                <td>아이디</td>
                <td><input type="text" class="form-control" name="id" id="uid" style="width:200px;display:inline;">
                <button type="button" class="btn btn-primary" onclick="checkid();">아이디 중복확인</button> (영문소문자/숫자, 4~16자)
                <input type="hidden" name="checked_id" value="">
                <td>
              </tr>

              <tr>
                <td>비밀번호</td>
                <td><input type="password" class="form-control" name="pass1" style="width:200px;display:inline;">
                  (영문 대소문자/숫자/특수문자 중 2가지 이상 조합, 8자~16자) 
                </td>      
              </tr>
             
              <tr>
                <td>비밀번호 확인</td>
                <td><input type="password" class="form-control" name="pass2" style="width:200px"></td>        
              </tr>

              <tr>
                <td>이름</td>
                <td><input type="name" class="form-control" name="name" style="width:200px"></td>        
              </tr>

              <tr>
                <td>주소</td>
                <td><input class="form-control" name="add1"style="width:100px;display:inline;"> <button type="button" class="btn btn-primary" onclick="sample6_execDaumPostcode()" stlye="margin-top:1;">우편번호</button>
                <input class="form-control" name="add2"style="width:300px;">
                <input class="form-control" name="add3"style="width:300px"></td>       
              </tr>

              <tr>
                <td>전화번호</td>
                <td><input type="tel" class="form-control" name="tel" style="width:200px"></td>       
              </tr>
              
              <tr>
                <td>이메일</td>
                <td><input type="email" class="form-control" name="email" style="width:200px"></td>       
              </tr>
              
              <tr>
                <td colspan="2" style="text-align:center;">
                <br><button type="button" class="btn btn-primary btn-lg">회원가입</button>
                </td>
              </tr> 
            </table>
          </form>
    </div>
    <hr>
      <div class="pop" >
        <div class="col">
            <div class="col-sm-6 col-md-4">
                  <p>CUSTOMER SERVICE<br>
                    1688-9308<br>
                    AM 10:00 - PM5:00 MON-FRI (HOLIDAY OFF)<br>
                    LUNCH PM12:00 - 1:00<br></p>
            </div>
        </div>

        <div class="col">
            <div class="col-sm-6 col-md-4">
                  <p>BANK ACCOUNT<br>
                    농협301-0220-0838-21<br>
                    국민039001-04-245314<br>
                    (주)어나더무드<br>
                    </p>
            </div>
        </div>

        <div class="col">
            <div class="col-sm-6 col-md-4">
                  <p>RETURN<br>
                    반품주소<br>
                    CJ대한통운 이용시 : 서울 동작구 대방동 CJ 대한통운 대방대리점<br>
                    타택배 이용시 : 서울시 금천구 독산동 291-1 현대지식산업센터 B동 2304호<br><br></p>
            </div>
        </div>
      </div>
      
   
      <br><br><br><br><br><br><br><br>
        
        <div class="bgimg-3 w3-display-container ">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide"></span>
            </div>
        </div>
        <br><br><br>

        <div class="footer">
            <div class="col">
                    ABOUT COMPANY &nbsp;&nbsp;&nbsp;
                    TERMS OF USE &nbsp;&nbsp;&nbsp;
                    USER GUIDE &nbsp;&nbsp;&nbsp;
                    개인정보 취급방침<br> 
                    TRADE NAME &nbsp;커먼유니크&nbsp;|&nbsp;
                    COMPANY&nbsp; (주)어나더무드&nbsp;|&nbsp;
                    OWNER  &nbsp;손영일&nbsp;|&nbsp;
                    BUSINESS LICENSE &nbsp; 108-81-98622&nbsp;|&nbsp; 
                    ONLINE BUSINESS LICENSE  &nbsp;제2019-서울마포-2200호&nbsp;<br>

                    ADDRESS  &nbsp;서울특별시 마포구 동교로23길 32-23&nbsp;|&nbsp;
                    CALL CENTER  &nbsp;1688-9308&nbsp;|&nbsp;
                    E-MAIL  &nbsp;help@anothermood.com&nbsp;|&nbsp;
                    제휴문의  &nbsp;yison@anothermood.com&nbsp;<br><br>
            </div>
        </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>

<script>
function checkid(){
	var userid = document.getElementById("uid").value;
	if(userid)
	{
		url = "checkId.php?userid="+userid;
			window.open(url,"chkid","width=300,height=150");
		}else{
			alert("아이디를 입력하세요");
		}
	}
</script>

  </body>
</html>
