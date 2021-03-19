<?php
    include './db_conn.php';
    include './navbar.php';
    $sql = "select * from item order by id desc";
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
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/item.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,800&display=swap" rel="stylesheet">
    <style>
  
        td{
          width:100px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;
        }

    </style>
  </head>
  <body>

      <div class="page-header">
        <h1>item</h1>
      </div>

      <table class='table'>
        <tr>
            <td>NO</td>
            <td>itemname</td>
            <td>itemcategory</td>
            <td>itemprice</td>
            <td>itemexplain</td>
            <td>itempicture</td>
            <td>itempicturedetail</td>
            <td>modify</td>
            <td>delete</td>
        </tr>
     

    <tr>
    <?php
    for($i=0; $i<$count; $i++){
        $re = mysqli_fetch_row($result);
        echo 
        "
        <td>$re[0]</td>
        <td>$re[1]</td>
        <td>$re[2]</td>
        <td>$re[3]</td>
        <td>$re[4]</td>
        <td>$re[5]</td>
        <td>$re[6]</td>
        <td><a href='itemmodify.php?idx=$re[0]'>수정</a></td>
        <td><a href='itemdelete.php?idx=$re[0]'>삭제</a></td>
        </tr>";
    }
  ?>

  </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
