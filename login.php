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
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,800&display=swap" rel="stylesheet">    
    <style>
      h1{
        font-family: 'Playfair Display', serif;
      }
    </style>
  <body>
      <div style="margin-left:auto;margin-right:auto;">
        <div class="col-lg-6" style="padding-top: 50px;"> 
          <div class="login-page">
            <h1>login</h1>
              <div class="form">
                <form class="login-form" action="loginaction.php" method="post">
                  <input type="text" name="userid" placeholder="아이디"/>
                  <input type="password" name="userpw" placeholder="비밀번호"/>
                  <button>login</button><br><br>
                  <button>JOIN US</button>
                </form>
              </div>
          </div>
        </div>

        <div class="col-lg-5" style="padding-top: 210px;padding-bottom: 100px"> 
          <img width="100%";height="auto"; src="./img/로그인.png">
        </div>
      </div>

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
      
      <?php
     for($i=0; $i<50; $i++){
        echo "<br>";}
    ?>
      <div class="bgimg-3 w3-display-container ">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide"></span>
            </div>
        </div><br>

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
    <script>

    </script>
  </body>
</html>
