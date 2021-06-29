<?php
     include './db_conn.php';
     $sql = "select * from user";
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,800&display=swap" rel="stylesheet">
    <style>
        body { padding-top: 50px; }
        .navbar-fixed-top { background-color: #ffffff; }
        .page-header{
            font-family: 'Playfair Display', serif;
            text-align: left;
        }
        h1{
            font-family: 'Playfair Display', serif;
        }
        .w3-xxlarge{
            font-family: 'Playfair Display', serif;
        }
        .caption{
            font-size: x-small;
            text-align:left;
        }
        .pop{
            text-align:center;
        }
        .notice{
            text-align: center;
        }
        .footer{
            text-align: right;
        }
         .bgimg-2, .bgimg-3 {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }


        .bgimg-2 {
            background-image: url("./img/mustang.jpg");
            min-height: 400px;
        }

        .bgimg-3 {
            background-image: url("./img/footer.jpg");
            min-height: 400px;
        }

        @media only screen and (max-device-width: 1024px) {
             .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
            }
        }
        
        a:link { color: black; text-decoration: none;}
        a:visited { color: black; text-decoration: none;}
        a:hover { color: black; text-decoration: none;}

    </style>
  </head>
  <body>

    <nav class="navbar-fixed-top navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                  </a>
              </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img alt="Brand" style="margin-top:-10px" src="./img/로고.JPG">
                  </a>
              </div>
             
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"> <span class="sr-only">(current)</span></li>
              <li><a href="#">outer</a></li>
              <li><a href="top.php">top</a></li>
              <li><a href="#">pants</a></li>
              <li><a href="#">skirt</a></li>
              <li><a href="#">shoes</a></li>
              <li><a href="#">bag</a></li>
              <li><a href="#">acc</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <?php
                    session_start();
                    if(isset($_SESSION['userid']) && isset($_SESSION['userpass'])){
                        $userid=$_SESSION['userid'];
                        $userpass=$_SESSION['userpass'];
   
                        echo "<li><a href='user.php'>$userid 님</a></li>";
                        echo "<li><a href='#'>CART</a></li>";
                        echo "<li><a href='logout.php'>LOGOUT</a></li>";
                        
                    }
                    else{
                        echo "<li><a href='join.php'>JOIN</a></li>";
                        echo "<li><a href='login.php'>LOGIN</a></li>";
                    }
                ?>
                    <ul class='nav navbar-nav'>
                        <li class='dropdown'>
                          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>BOARD <span class='caret'></span></a>
                          <ul class='dropdown-menu' role='menu'>
                            <li><a href='cscenter.php'>CS CENTER</a></li>
                            <li><a href='notice.php'>NOTICE</a></li>
                            <li><a href='celeb.php'>CELEB</a></li>
                          </ul>
                        </li>
                    </ul>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

     

        
    <div class="page-header" >
            <h1>my page</h1>
        </div>
   

    <br><br><br><br>


    <div class="pop">
        <div class="col" style="text-align:left;">
            <div class="col-sm-6 col-md-4">
                  <p>CUSTOMER SERVICE<br>
                    1688-9308<br>
                    AM 10:00 - PM5:00 MON-FRI (HOLIDAY OFF)<br>
                    LUNCH PM12:00 - 1:00<br></p>
            </div>
        </div>
        <div class="col" style="text-align:center;">
            <div class="col-sm-6 col-md-4" >
                  <p>BANK ACCOUNT<br>
                    농협301-0220-0838-21<br>
                    국민039001-04-245314<br>
                    (주)어나더무드<br>
                    </p>
            </div>
        </div>
        <div class="col" style="text-align:right;"> 
            <div class="col-sm-6 col-md-4">
                  <p>RETURN<br>
                    반품주소<br>
                    CJ대한통운 이용시 : 서울 동작구 대방동 CJ 대한통운<br>
                    타택배 이용시 : 서울시 금천구 독산동 291-1<br><br></p>
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
        </div><br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
