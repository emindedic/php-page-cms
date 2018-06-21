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
        <th>Broj komentara</th>
        <th>Ime</th>
        <th>Komentar</th>
        <th>Obriši</th>
    </tr>

    <?php
include("../includes/database.php");

$get_comments= "select*from comments";
$run_comments = mysqli_query($connect,$get_comments);

$i = 1;

while ($row_comments = mysqli_fetch_array($run_comments)) {
    $comment_id = $row_comments['comment_id'];
    $comment_name = $row_comments['comment_name'];
    $comment_text = $row_comments['comment_text'];

?>
    <tr align="center">
        <td><?php echo $i++ ?></td>
        <td><?php echo $comment_name; ?></td>
        <td><?php echo $comment_text ?></td>
        
        <td><a href="includes/del_comment.php?del_comment=<?php echo $comment_id; ?>">Obrisi</a></td>
    </tr>

<?php } ?>

</table>
</body>
</html>