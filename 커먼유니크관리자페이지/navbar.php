<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
              <li><a href="itemupload.php">상품등록</a></li>
              <li><a href="itemmanagement.php">상품관리</a></li>
              <li><a href="user.php">회원관리</a></li>
            </ul>
            <ul class='nav navbar-nav'>
                        <li class='dropdown'>
                          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>notice <span class='caret'></span></a>
                          <ul class='dropdown-menu' role='menu'>
                            <li><a href='noticeshow.php'>SHOW</a></li>
                            <li><a href='notice.php'>WRITE</a></li>
                          </ul>
                        </li>
                    </ul>
              <ul class='nav navbar-nav'>
                    <li class='dropdown'>
                      <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>qna <span class='caret'></span></a>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='qnashow.php'>SHOW</a></li>
                        <li><a href='qnawrite.php'>WRITE</a></li>
                      </ul>
                    </li>
                </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/커먼유니크/index.php">커먼유니크</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</body>
</html>