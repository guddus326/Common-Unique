<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>커먼유니크</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,800&display=swap" rel="stylesheet">
    <style>
        body { padding-top: 50px; }
        .navbar-fixed-top { background-color: #ffffff; }
        .page-header{
            font-family: 'Playfair Display', serif;
            text-align: left;
        }
        .caption{
            font-size: x-small;
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
      
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
          width: 500px;
          padding: 8% 0 0;
          margin: auto;
        }

        .form {
          position: relative;
          z-index: 1;
          background: #FFFFFF;
          max-width: 500px;
          margin: 0 auto 100px;
          padding: 45px;
          text-align: center;
        }
        .form input {
          font-family: "Roboto", sans-serif;
          outline: 0;
          background: #f2f2f2;
          width: 100%;
          border: 0;
          margin: 0 0 15px;
          padding: 15px;
          box-sizing: border-box;
          font-size: 14px;
        }
        .form button {
          font-family: "Roboto", sans-serif;
          text-transform: uppercase;
          outline: 0;
          background: #ffffff;
          border: 1px solid #ffffff;
          width: 100%;
          border: 0;
          padding: 15px;
          color: #000000;
          font-size: 14px;
          -webkit-transition: all 0.3 ease;
          transition: all 0.3 ease;
          cursor: pointer;
        }
        .form .button1 {
          font-family: "Roboto", sans-serif;
          text-transform: uppercase;
          outline: 0;
          background: #4CAF50;
          width: 49.5%;
          border: 0;
          padding: 15px;
          color: #FFFFFF;
          font-size: 14px;
          -webkit-transition: all 0.3 ease;
          transition: all 0.3 ease;
          cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
          background: #43A047;
        }
        .form .message {
          margin: 15px 0 0;
          color: #b3b3b3;
          font-size: 12px;
        }
        .form .message a {
          color: #4CAF50;
          text-decoration: none;
        }
        .form .register-form {
          display: none;
        }
        .container {
          position: relative;
          z-index: 1;
          max-width: 300px;
          margin: 0 auto;
        }
        .container:before, .container:after {
          content: "";
          display: block;
          clear: both;
        }
        .container .info {
          margin: 50px auto;
          text-align: center;
        }
        .container .info h1 {
          margin: 0 0 15px;
          padding: 0;
          font-size: 36px;
          font-weight: 300;
          color: #1a1a1a;
        }
        .container .info span {
          color: #4d4d4d;
          font-size: 12px;
        }
        .container .info span a {
          color: #000000;
          text-decoration: none;
        }
        .container .info span .fa {
          color: #EF3B3A;
        }
   
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
                <a class="navbar-brand" href="#">
                    <img alt="Brand" style="margin-top:-10px" src="./img/로고.JPG">
                  </a>
              </div>
             
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"> <span class="sr-only">(current)</span></li>
              <li><a href="#">outer</a></li>
              <li><a href="#">shirt&blouse</a></li>
              <li><a href="#">knit&cardigan</a></li>
              <li><a href="#">top</a></li>
              <li><a href="#">pants</a></li>
              <li><a href="#">skirt</a></li>
              <li><a href="#">bag</a></li>
              <li><a href="#">shoes</a></li>
              <li><a href="#">acc</a></li>
              <li><a href="#">jewelry</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">LOGIN</a></li>
              <li><a href="#">JOIN</a></li>
              <li><a href="#">CART</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

      

       <div class="page-header">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;login</h1>
      </div>   
 
      <div style="margin-left:auto;margin-right:auto;">
     <div class="col-lg-6" style="padding-top: 50px;"> 
        <div class="login-page">
          <div class="form">
            <form class="login-form">
              <input type="text" placeholder="username"/>
              <input type="password" placeholder="password"/>
              <button>login</button><br><br>
              <button class="button1">login</button>
              <button class="button1">login</button><br><br>
              <button>JOIN US</button>
            </form>
          </div>
        </div>
      </div>



      <div class="col-lg-5" style="padding-top: 50px;"> 
      <img width="100%";height="auto"; src="./img/로그인.png">

      </div>

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
            <div class="col-sm-6 col-md-4">
                  <p>RETURN<br>
                    반품주소<br>
                    CJ대한통운 이용시 : 서울 동작구 대방동 CJ 대한통운 대방대리점<br>
                    타택배 이용시 : 서울시 금천구 독산동 291-1 현대지식산업센터 B동 2304호<br><br></p>
            </div>
        </div>
        </div>
   
        <div class="middle">
          <img width="100%";height="auto"; src="./img/중간.JPG"><br><br><br>
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
                    제휴문의  &nbsp;yison@anothermood.com&nbsp;<br><br>
            </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
