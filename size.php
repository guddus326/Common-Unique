
<?php
     include './db_conn.php';
     include './navbar.php';
     $sql = "select * from qna where category='size' ";
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
        button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #13492a;
    border: 1px solid #13492a;
    width: 10%;
    padding: 15px;
    color: #ffffff;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
  }
  

    </style>
  </head>
  <body>


    <div class="page-header" style="text-align:center">
        <h1>q&a</h1>
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
    </div><br><br><br><br><br><br>


    <table class='table'>
      <tr>
        <td>NO</td>
        <td>item</td>
        <td>SUBJECT</td>
        <td>NAME</td>
        <td>DATE</td>

    </tr>

    <tr>
    <?php
    for($i=0; $i<$count; $i++){
        $re = mysqli_fetch_row($result);
        echo 
        "
        <td>$re[0]</td>
        <td>$re[3]</td>
        <td>$re[2]</td>
        <td>$re[1]</td>
        <td>$re[5]</td>
        
        </tr>";
    }
  ?>

  </table>
  <div style="text-align:center;">
    <button class="button1" onclick="location.href='q&a.php?uid=<?php echo $userid ?>'">WRITE</BUTTON>
  </div>

    <?php
     for($i=0; $i<5; $i++){
        echo "<br>";}
    ?>


   


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
        <div class="middle">
        <img width="100%";height="auto"; src="./img/인스타.JPG"><br><br>
    </div><br><br><br>
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
  </body>
</html>
