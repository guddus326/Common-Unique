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
    <link href="../css/item.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,800&display=swap" rel="stylesheet">
    <style>
      h1{
            font-family: 'Playfair Display', serif;
         
        } 
    </style>
  </head>
  <body>
    <div class="page-header" style="text-align:center;">
        <h1>notice</h1>
    </div>

    <div class="container" role="main">
        <form method="post" enctype="multipart/form-data" action="noticeupload.php">
				<div class="mb-3">
					<label for="title">제목</label>
					<input type="text" class="form-control" name="title" placeholder="제목"><br>
				</div>
    
			
				<div class="mb-3">
					<label for="content">설명</label>
					<textarea class="form-control" rows="4" name="content" >내용</textarea><br>
				</div>
				<div >
					<button type="submit" class="btn btn-sm btn-primary" id="btnSave">저장</button>
				</div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
