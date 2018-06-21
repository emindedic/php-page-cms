<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ubacivanje vijesti</title>
  <meta charset="UTF-8">
  <meta <http-equiv="Content-Type" content="text/html;">
  <link href="styles/style.css" rel="stylesheet" media="all">
</head>

<body>

  <form action="index.php?insert_post" method="post" enctype="multipart/form-data">
    <table width="770" align="center" border="2">
      <tr bgcolor="#AA0116">
        <td colspan="6" align="center">
          <h2>Ubacite novu vijest:</h2>
        </td>
      </tr>

      <tr bgcolor="#E7E7E7">
        <td aling="right">Ubaci naslov:</td>
        <td>
          <input type="text" name="post_title" size="50" />
        </td>
      </tr>

      <tr bgcolor="#E7E7E7">
        <td aling="right">Odaberi kategoriju clanka:</td>
        <td>
          <select name="cat">

            <option>Odaberi kategoriju</option>
            <?php
include "../includes/database.php";

$get_cats = "SELECT*FROM categories";

$run_cats = mysqli_query($connect,$get_cats);

while ($cats_row = mysqli_fetch_array($run_cats)) {
    $cat_id = $cats_row['cat_id'];
    $cat_title= $cats_row['cat_title'];
    
    echo "<option value='$cat_id'>$cat_title</option>";
}
?>

          </select>
        </td>
      </tr>
      <tr bgcolor="#E7E7E7">
        <td aling="right">Ubaci autora clanka:</td>
        <td>
          <input type="text" name="post_author" size="50" />
        </td>
      </tr>

      <tr bgcolor="#E7E7E7">
        <td aling="right">Ubaci tekst clanka:</td>
        <td>
          <textarea name="post_content" rows="10" cols="48"></textarea>
        </td>
      </tr>

      <tr bgcolor="#C4C1C1">
        <td colspan="6" align="center">
          <input type="submit" name="submit" value="Objavi vijest" />
        </td>
      </tr>
  </form>
</body>

</html>


<?php

include "../includes/database.php";

if (isset($_POST["submit"])) {
    
    $post_title = $_POST['post_title'];
    $post_date = date('d-m-y');
    $post_cat = $_POST['cat'];
    $post_author = $_POST['post_author'];
    $post_content = $_POST['post_content'];
    
    
    if ($post_title=='' || post_cat==null || $post_author==''  || $post_content=='') {
        echo "<script>alert('Molimo popunite sva polja')</script>";
        exit();
    } else {
        $insert_posts = "INSERT INTO `posts` (`category_id`, `post_title`, `post_date`, `post_author`, `post_content`)
        VALUES ('$post_cat','$post_title','$post_date','$post_author','$post_content')";
        
        $run_posts = mysqli_query($connect, $insert_posts);
        
        
        echo "<script>alert('Vijest je objavljena!')</script>";
        
        echo "<script>window.open('index.php?insert_post','_self')</script";
        
        
        
        
    }
    
    
}

?>