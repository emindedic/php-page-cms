<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>View posts</title>
  <link rel="stylesheet" href="style.css">

<style type="text/css">
th,td,tr,table {
    padding: 0;
    margin:0;
}
th {
    border-left: 1px
    solid #333;
}
</style>

</head>
<body>
  
<table align="center" bgcolor="C0BEBE" width="790">
    <tr>
        <th>Post ID</th>
        <th>Nalov</th>
        <th>Autor</th>
        <th>Obriši</th>
    </tr>

    <?php
include("../includes/database.php");

$get_posts = "select*from posts";
$run_posts = mysqli_query($connect,$get_posts);

$i = 1;

while ($row_posts = mysqli_fetch_array($run_posts)) {
    $post_id = $row_posts['post_id'];
    $post_title = $row_posts['post_title'];
    $post_date = $row_posts['post_date'];
    $post_author = $row_posts['post_author'];

    

?>
    <tr align="center">
        <td><?php echo $i++ ?></td>
        <td><?php echo $post_title; ?></td>
        <td><?php echo $post_author; ?></td>
        
        <td><a href="includes/delete_post.php?delete_post=<?php echo $post_id; ?>">Obrisi</a></td>
    </tr>


<?php } ?>

</table>
</body>
</html>