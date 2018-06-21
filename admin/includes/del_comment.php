<?php

include "database.php";

if(isset($_GET['del_comment']))
{
   $delete_id = $_GET['del_comment'];

   $delete_comment = "DELETE FROM comments WHERE comment_id='$delete_id'";
   $run_delete = mysqli_query($connect, $delete_comment);


   echo "<script>alert('Komentar je obrisan')</script>";
   echo "<script>window.open('../index.php?view_comments','_self')</script>";

}


?>