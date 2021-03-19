<?php
     include './db_conn.php';
     include './navbar.php';
     $sql = "select * from board ";
     $result = mysqli_query($conn, $sql);
     $count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>커먼유니크</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/item.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,800&display=swap" rel="stylesheet">
    <style>    
        h1{
            font-family: 'Playfair Display', serif;
        }
    </style>
  </head>
  <body>
    <div class="page-header" style="text-align:center;">
        <h1>cs center</h1>
    </div>

            <div class="col-sm-6 col-md-4" style="text-align:center">
                <div class="page-header1" style="text-align:center">
                    <br><h5>CUSTOMER SERVICE</h5><br>
                </div>
               
                <h3>1688-9308</h3><br>
                AM 10:00 - PM5:00 MON-FRI<br>
                LUNCH PM12:00 - 1:00<br><br><br>
                
            </div>
  

  
            <div class="col-sm-6 col-md-4" style="text-align:center">
                <div class="page-header1" style="text-align:center">
                    <br><h5>NOTICE</h5><br>
                </div>
                    무통장 입금<br>
                    농협 301-0220-0838-21<br>
                    국민 039001-04-245314<br><br>
                    (주)어나더무드
            </div>
  
            <div class="col-sm-6 col-md-4" style="text-align:center">
                <div class="page-header1" style="text-align:center">
                <br><h5>NOTICE</h5>
                </div>
                <?php
    for($i=0; $i<3; $i++){
        $re = mysqli_fetch_row($result);
        echo 
        "
        <td>●</td>
        <td>[공지]</td>
        <td>$re[2]</td>
        </tr><br>";
    }
  ?> <br><br>
                <a href="notice.php" style="text-align:right;">+더보기</a>
               <br><br><br><br><br><br>
            </div>
         

    <div class="page-header">
        <h1 style="display:inline;">&nbsp;&nbsp;q/a</h1> - 카테고리에 맞게 문의 글을 남겨주시면 좀 더 정확하고 빠른 응대가 가능합니다.
    </div>
    <div class="pop">

        
        <div class="col" onclick="location.href='size.php'">
            <div class="col-sm-3 col-md-2" style="border: 1px solid #eee">
            <br>
            <i class="fas fa-tape fa-lg"></i><br>
            <br>상품/사이즈 문의<br><br>
            </div>
        </div>
        
    

        <div class="col">
            <div class="col-sm-3 col-md-2" style="border: 1px solid #eee">
            <br>
            <i class="fas fa-truck fa-lg"></i><br>
            <br>배송 문의<br><br>
            </div>
        </div>

  
        <div class="col">
            <div class="col-sm-3 col-md-2" style="border: 1px solid #eee">
            <br>
            <i class="fas fa-clipboard fa-lg"></i><br>
                    <br>배송 전 주문변경 문의<br><br>
            </div>
        </div>
        <div class="col">
            <div class="col-sm-3 col-md-2" style="border: 1px solid #eee">
            <br>
            <i class="fas fa-box-open fa-lg"></i><br>
            <br>배송 후 교환/반품 문의<br><br>
            </div>
        </div>
    

        <div class="col">
            <div class="col-sm-3 col-md-2" style="border: 1px solid #eee">
            <br>
            <i class="fas fa-piggy-bank fa-lg"></i><br>
            <br> 입금확인/미확인입금자<br><br>
            </div>
        </div>

  
        <div class="col">
            <div class="col-sm-3 col-md-2" style="border: 1px solid #eee">
            <br>
            <i class="fas fa-question-circle fa-lg"></i><br>
            <br>기타문의<br><br>
            </div>
        </div>
    </div>



    <br><br><br><br><br><br>
    <div class="page-header">
        <h1 style="display:inline;">&nbsp;&nbsp;faq</h1> - 자주 묻는 질문을 참고하시면 더욱 빠르게 답변을 얻으실 수 있습니다.
    </div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>


  
    <div class="bgimg-3 w3-display-container ">
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide"></span>
            </div>
        </div><br><br>

   

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
        </div><br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
