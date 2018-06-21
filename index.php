<!DOCTYPE html>
<html lang="en">

<head>
  <title>Portal vijesti</title>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html;">
  <link href="styles/style.css" type="text/css" rel="stylesheet" media="all">
</head>

<body>

  <!-- Glavna stranica-->
  <div class="container">
    <!-- Header starts-->
        <div class="head">
        <a href="index.php"><img id="logo" src="images/banner-vijesti.png" alt=""></a>
        <img id="banner" src="images/banner-reklama.png" alt="">
        </div>

      <!-- Header ends-->

      <!-- Navbar pocinje-->

     <?php include "includes/navbar.php";?>

      <!-- Navbar zavrsava-->

      <!-- Sadrzaj stranice pocinje-->

      <?php include "includes/post_content.php";?>
      

      <!-- Sadrzaj zavrsava-->


      <!-- Sidebarstranice pocinje-->
      
       <?php include "includes/sidebar.php";?>
      <!-- Sidebar zavrsava-->

  </div>
</body>

</html>