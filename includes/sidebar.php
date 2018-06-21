<div class="sidebar">
<div id='sidebar-title'>Zadnje vijesti</div>
          <?php
                      $get_posts = "SELECT * FROM posts order by 1 DESC LIMIT 10";
                      $run_posts = mysqli_query($connect, $get_posts);
          
                      while ($posts_row = mysqli_fetch_array($run_posts)) {
                              $post_id = $posts_row['post_id'];
                              $post_title = $posts_row['post_title'];
                              $post_date = $posts_row['post_date'];
                              echo "
                                
                              <div class='recent_post'>
                              
                              <a href='details.php?post=$post_id'><h1>$post_title</h1></a>
                              <span><i>Objavljeno:$post_date</i></span>
 
                             </div>
                              ";
          
                      }

          ?>
        </div>