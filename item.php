<?php
    include './db_conn.php';
    include './navbar.php';
    $idx=$_GET['idx'];

    $sql="select * from item where id=$idx";
    $result=mysqli_query($conn,$sql);
    $re=mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,800&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="page-header">
        <h1>&nbsp;<?php echo "[".$re[2]."] ".$re[1] ?></h1>
    </div>

    
        <div class="col-lg-6 " style="width:60%;height:auto;"> 
            <a href="#">
                <img src=<?php echo $re[6];?>  alt="..."><br><br><br><br>
            </a>
        </div>
    
        <div class="col-lg-4 " style="width:40%;height:auto;"> 
        <?php echo "[".$re[2]."] ".$re[1] ?><br><br>
          <?php echo $re[4];?>
            <hr>
            <div class="price" style="text-align:left;">
                PRICE<br><br>
            </div>
                <?php echo $re[3];?> won<br><Br>
           
            <div class="price" style="text-align:left;">
                COLOR<br><br>
            </div>
                <select class="selectpicker">
                  <option>-[필수] COLOR 선택-</option>
                  <option>----------------</option>
                  
                </select>
          
            <hr>
            
            <div class="form">
                <form class="login-form" action="loginaction.php" method="post">
                    <button>BUT IT NOW</button><br><br>
                    <button class="button1">ADD TO CART</button><br><br>
                    <button class="button1">WISH LIST</button>
                    <br><br><br><br><br><br>
                    
                </form>
            </div>
        </div>

        
        <div class="middle" style="text-align:center;">
            <img width="100%";height="auto"; src="./img/member.JPG" ><br><br>
        </div>

        <div class="page-header" style="text-align:center;">
            <h2>check it</h2>
        </div>

        <div class="middle" style="text-align:center;">
            <img width="80%";height="auto"; src="./img/체크.JPG" ><br><br>
        </div>

        <div class="page-header" style="text-align:center;">
            <h2>common unique review point</h2>
            <h4>매일 선정하는 베스트리뷰는 10,000원 즉시지급</h3>
        </div>

        <div class="middle" style="text-align:center;">
            <img width="80%";height="auto"; src="./img/리뷰.JPG" ><br><br>
        </div>

        
        <div class="page-header" style="text-align:center;">
            <h2>model size</h2>
        </div>

        <div class="middle" style="text-align:center;">
            <img width="80%";height="auto"; src="./img/model.JPG" ><br><br>
        </div>

        <div class="middle">
            <img width="100%";height="auto"; src="./img/인스타.JPG"><br><br>
        </div>

        <div class="pop">
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
            <div class="col-sm-6 col-md-4" style="">
                  <p>RETURN<br>
                    반품주소<br>
                    CJ대한통운 이용시 : 서울 동작구 대방동 CJ 대한통운 대방대리점<br>
                    타택배 이용시 : 서울시 금천구 독산동 291-1 현대지식산업센터 B동 2304호<br><br></p>
            </div>
        </div>

        <div class="bgimg-3 w3-display-container ">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide"></span>
            </div>
        </div>

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
                    제휴문의  &nbsp;yison@anothermood.com&nbsp;<br><br><br><br>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
