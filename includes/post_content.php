<div class="post_area">
        <?php

        if (!isset($_GET['cat'])) {

            $get_posts = "SELECT * FROM posts order by 1 DESC LIMIT 4";
            $run_posts = mysqli_query($connect, $get_posts);

            while ($posts_row = mysqli_fetch_array($run_posts)) {
                    $post_id = $posts_row['post_id'];
                    $post_title = $posts_row['post_title'];
                    $post_date = $posts_row['post_date'];
                    $post_author = $posts_row['post_author'];
                    $post_content = substr($posts_row['post_content'],0,300);
                    
                    echo "
                    
                    <a href='details.php?post=$post_id'><h1>$post_title</h1></a>

                    <span><i>Autor:$post_author</i>&nbsp&nbsp</span>
                    <span><i>Objavljeno:$post_date</i></span>


                    
                   <div><p>$post_content</p>
                   <a id='link' href='details.php?post=$post_id'>Pročitaj vise</a>
                   
                   </div><br />
                    ";

            }
        }
        // Ubacivanje razvrstavanja po kategorijama
        include "includes/category_post.php";
       
?>

</div>