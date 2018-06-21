<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Page</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrapper">
      <a href="index.php"> <div class="header"></div></a>

      <div class="left">
          <h1 style="padding:5px; text-align:right;">Upravljaj sadrzajem</h1>


          <a href="index.php?insert_post">Ubaci novu vijest</a>
          <a href="index.php?view_post">Pogledaj sve postove</a>
          <a href="index.php?view_comments">Pogledaj sve komentare</a>

      </div>
      <div class="right">
          <div style = "width:650px; padding: 30px" >
          <h2>Uredite zeljeni sadrzaj tako sto cete odabrati kategoriju</h2>
</div>

<h2 style="color:#C33; width:650px; padding: 30px"><?php echo @$_GET['logged']; ?></h2>



      <?php
    if (isset($_GET['insert_post'])) {
        include ("includes/insert_post.php");

    }

    if (isset($_GET['view_post'])) {
        include ("includes/view_post.php");

    }

    if (isset($_GET['view_comments'])) {
        include ("includes/view_comments.php");

    }

    if (isset($_GET['del_comment'])) {
        include ("includes/del_comments.php");

    }


    

?>
      </div>
      
  </div>
</body>
</html>

