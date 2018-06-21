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
      <div class="post_area">
        <?php
            if (isset($_GET['post'])) { 
                $post_id = $_GET['post'];
        
            
            $get_posts = "SELECT * FROM posts where post_id=$post_id";
            $run_posts = mysqli_query($connect, $get_posts);

            while ($posts_row = mysqli_fetch_array($run_posts)) {
                    $post_title = $posts_row['post_title'];
                    $post_date = $posts_row['post_date'];
                    $post_author = $posts_row['post_author'];
                    $post_content = $posts_row['post_content'];

                    $post_new_id = $row['post_id'];
                    echo "
                    
                    <h1>$post_title</h1>
                    <span><i>Autor:$post_author</i>&nbsp&nbsp</span>
                    <span><i>Objavljeno:$post_date</i></span>       
                   <div><p>$post_content</p></div><br />";

            }
        }
?>

<!-- Komentari-->
<?php include "includes/comments.php";?>


<?php
$get_comments = "SELECT * FROM comments ORDER BY 1 DESC LIMIT 5";
$run_comments = mysqli_query($connect, $get_comments);

while ($row_comments=mysqli_fetch_array($run_comments)) {
  $comment_name= $row_comments['comment_name'];
  $comment_text = $row_comments['comment_text'];

  echo "<h3 style='background:grey; width:685px; margin-top:15px; padding-left:10px; color:white;'>$comment_name<i> je napisao:</i></h3>
  <p style='bakcground:#99CCCC; padding-left:5px;'>$comment_text</p>";
}
?>

</div>
      <!-- Sadrzaj zavrsava-->

      <!-- Sidebarstranice pocinje-->
      
       <?php include "includes/sidebar.php";?>
      <!-- Sidebar zavrsava-->
        <div class="footer">
          This is the foooter
        </div>

  </div>
</body>

</html>