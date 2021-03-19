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


    </style>
  </head>
  <body>
    <div>
        <h1 class="page-header" style="text-align:center;">
                item
        </h1>
    </div>

    <div class="container" role="main">
        <form method="post" enctype="multipart/form-data" action="upload.php">
				<div class="mb-3">
					<label for="title">상품명</label>
					<input type="text" class="form-control" name="itemname" placeholder="상품명"><br>
				</div>
				<div class="mb-3">
					<label for="content">가격</label>
				    <input type="text" class="form-control" name="itemprice" placeholder="가격"><br>
                </div>
                <div class="mb-3">
					<label for="content">사진(main)</label>
				    <input type="file" name="itempicture1"><br>
                </div>
                <div class="mb-3">
					<label for="content">사진(detail)</label>
				    <input type="file" name="itempicture2"><br>
				</div>
				<div class="mb-3">
					<label for="language">CATEGORY</label>
					<select class="form-control" name="itemcategory">
	  					<option value="">CATEGORY</option>
	  					<option value="OUTER">OUTER</option>
	  					<option value="TOP">TOP</option>
                        <option value="PANTS">PANTS</option>
                        <option value="SKIRT">SKIRT</option>
                        <option value="SHOES">SHOES</option>
                        <option value="BAG">BAG</option>
                        <option value="ACC">ACC</option>
					</select>
				</div><BR>
				<div class="mb-3">
					<label for="content">설명</label>
					<textarea class="form-control" rows="4" name="itemexplain" placeholder="내용" ></textarea><br>
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
