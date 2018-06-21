<?php

include "database.php";

if(isset($_GET['delete_post']))
{
   $delete_id = $_GET['delete_post'];

   $delete_post = "DELETE FROM posts WHERE post_id=$delete_id";
   $run_delete = mysqli_query($connect, $delete_post);


   echo "<script>alert('Post je obrisan')</script>";
   echo "<script>window.open('../index.php?view_post','_self')</script>";

}


?>