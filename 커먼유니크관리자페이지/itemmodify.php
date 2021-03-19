<?php

$_idx=$_GET['idx']; 
include './navbar.php';
include './db_conn.php';
$sql="select * from item where id=$_idx";
$result=mysqli_query($conn,$sql);
$re=mysqli_fetch_array($result);
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
            text-align: left;
        } 
    </style>
  </head>
  <body>
    <div>
        <h1 class="page-header" style="text-align:center;">
            item
        </h1>
    </div>

    <div class="container" role="main">
        <form method="post" enctype="multipart/form-data" action="modify.php?idx=<?php echo $re['id'];?>">
				<div class="mb-3">
					<label for="title">상품명</label>
					<input type="text" class="form-control" name="itemname" placeholder="상품명" value="<?php echo $re['itemname']; ?>"><br>
				</div>
				<div class="mb-3">
					<label for="content">가격</label>
				    <input type="text" class="form-control" name="itemprice" placeholder="가격" value="<?php echo $re['itemprice']; ?>"><br>
                </div>
                <div class="mb-3">
					<label for="content">사진(main)</label>
				    <input type="file" name="itempicture1" value="<?php echo $re[4] ?>"><br>
                </div>
                <div class="mb-3">
					<label for="content">사진(detail)</label>
				    <input type="file" name="itempicture2"><br>
				</div>
				<div class="mb-3">
					<label for="language">CATEGORY</label>
					<select class="form-control" name="itemcategory" >
                        <option value="<?php echo $re['itemcategory']; ?>"><?php echo $re['itemcategory']; ?></option>
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
					<textarea class="form-control" rows="4" name="itemexplain" placeholder="내용" ><?php echo $re['itemexplain']; ?></textarea><br>
				</div>
				<div >
					<button type="submit" class="btn btn-sm btn-primary" id="btnSave">저장</button>
				</div><br>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
