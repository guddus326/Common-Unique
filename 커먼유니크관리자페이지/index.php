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
    <link href="../css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,800&display=swap" rel="stylesheet">

  </head>
  <body>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img width="100%";height="auto"; src="./img/게시판1.png" alt="...">
                </div>
                <div class="item">
                    <img width="100%";height="auto"; src="./img/게시판4.png" alt="...">
                </div>
                <div class="item">
                    <img width="100%";height="auto"; src="./img/게시판2.png" alt="...">
                </div>
                <div class="item">
                    <img width="100%";height="auto"; src="./img/게시판3.png" alt="...">
                </div>
            </div>
      </div>
    <script>
     $('.carousel').carousel({
        interval: 2000
    })
     </script>



   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
