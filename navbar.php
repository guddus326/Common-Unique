
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
        .navbar-fixed-top { background-color: #ffffff; }
        .page-header{
            font-family: 'Playfair Display', serif;
            text-align: left;
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
                            <li class="disabled"><a href='celeb.php'>CELEB</a></li>
                          </ul>
                        </li>
                    </ul>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
  </body>
</html>
