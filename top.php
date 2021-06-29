<?php
     include './db_conn.php';
     include './navbar.php';
     $sql = "select * from item where itemcategory='TOP' ";
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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,800&display=swap" rel="stylesheet">
    <style>
   
        h1{
            font-family: 'Playfair Display', serif;
        }
        
        
    </style>
  </head>
  <body>

    <div class="page-header" STYLE="text-align:center">
        <h1>TOP</h1>
    </div>
    <br>
    <div class="pop">
        
    <?php
        for($i=0; $i<12; $i++){
            $re = mysqli_fetch_row($result);
    ?>
    
    <div class="col">
            <div class="col-sm-3 col-md-3" style="font-size: x-small;">
                    
                <a href="item.php?idx=<?php echo $re[0]; ?>" >
                    <img src=<?php echo $re[5];?>   alt="..."><br><br>
                </a>
                <div style="font-size: x-small;t">
                    <a href="item.php=<?php echo $re[0]; ?>" >
                        [<?php echo $re[2];?>] <?php echo $re[1];?><br><br>
                    </a>
                    <?php echo $re[3];?> won<br><br>
                    <?php echo $re[4];?><br><br>
                </div>
            </div>
        </div>

    <?php
    
        }
      
    ?>
    </div>
  <br<br>

    <div class="pop">
        <div class="col" style="text-align:left;">
            <div class="col-sm-6 col-md-4">
            <br><br><p>CUSTOMER SERVICE<br>
                    1688-9308<br>
                    AM 10:00 - PM5:00 MON-FRI (HOLIDAY OFF)<br>
                    LUNCH PM12:00 - 1:00<br></p>
            </div>
        </div>
        <div class="col" style="text-align:center;">
            <div class="col-sm-6 col-md-4" >
            <br><br><p>BANK ACCOUNT<br>
                    농협301-0220-0838-21<br>
                    국민039001-04-245314<br>
                    (주)어나더무드<br>
                    </p>
            </div>
        </div>
        <div class="col" style="text-align:right;"> 
            <div class="col-sm-6 col-md-4">
            <br><br> <p>RETURN<br>
                    반품주소<br>
                    CJ대한통운 이용시 : 서울 동작구 대방동 CJ 대한통운<br>
                    타택배 이용시 : 서울시 금천구 독산동 291-1<br><br></p>
            </div>
        </div>
    </div>
    <?php
     for($i=0; $i<75; $i++){
        echo "<br>";}
    ?>
    <div class="bgimg-2 w3-display-container ">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">riana high neck fur mustang</span>
        </div>
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
        </div><br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
