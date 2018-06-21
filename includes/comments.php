<form method="post" action="details.php?post=<?php echo $post_id; ?>">
        <h2>Komentarišite članak</h2>
        <table width="700" bgcolor="#E0E0E0">
          <tr>
          <td>Unesite vase ime<br><input type="text" name="comment_name"></td>
         </tr>
         <tr>
          <td>Unesite komentar<br><textarea name="comment" rows="10" cols="40"></textarea></td>
          </tr>
          <tr>
          <td calspan="5"><input type="submit" name="submit" value="Postavi svoj komentar"></td>
          </tr>
        </table>
  
</form>

    <?php
        
        if (isset($_POST['comment'])) {
            
            $comment_name = $_POST['comment_name'];
            $comment = $_POST['comment'];
            $status = "Unapprove";

            if ($comment_name == '' || $comment == '') {
                echo "<script>alert('Molimo vas da popunite poplja')</script>";
                echo "<script>window.open('details.php?post=$post_id')</script>";
                exit();
            }
            else{
                $query_comment = "INSERT INTO `comments` (`comment_name`, `comment_text`,`status`)
                VALUES ('$comment_name','$comment','$status')";
                
                $run_posts = mysqli_query($connect, $query_comment);

                echo "Hvala na komentaru i bit ce prikazan nakon sto bude odobren.";
            }
        }
    ?>