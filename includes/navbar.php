<div class="navbar">
      <ul id="menu">

      <li>
    <a href='index.php'>Početna</a>
    </li>

        <?php
include "includes/database.php";

$get_cats = "SELECT*FROM categories";

$run_cats = mysqli_query($connect,$get_cats);

while ($cats_row = mysqli_fetch_array($run_cats)) {
    $cat_id = $cats_row['cat_id'];
    $cat_title= $cats_row['cat_title'];
    
    echo "<li>
    <a href='index.php?cat=$cat_id'>$cat_title</a>
    </li>";
}
?>

      </ul>
    </div>