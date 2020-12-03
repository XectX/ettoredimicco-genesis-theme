<!doctype html>
  <?php get_header(  ); ?>
  
    <!-- Articles -->
    <div class="container">
      <?php 
        if(have_posts())
          while(have_posts())
          {
            the_post();
            echo "<article>";
            echo "  <h3>"; the_title(); echo"</h3>";
            echo "  <p><i>Article by "; the_author(); echo ". Posted on "; the_time('d F Y'); echo"</i></p>";
            
            if(has_post_thumbnail())
            {
              echo "<div class='img-post'>";
              the_post_thumbnail();
              echo "</div>";
            }
            
            the_content();
            echo "</article>";
          }
        else
          echo wpautop("Oops, there's no article to show!");
      ?>
    </div>
    <div class="container">
      <!-- <?php comments_template();?> -->
      <!-- <?php comment_form();?> -->
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="wp-content/themes/Lab4Life/assets/js/jquery-3.4.1.min.js"></script>
    <script src="wp-content/themes/Lab4Life/assets/js/popper.min.js"></script>
    <script src="wp-content/themes/Lab4Life/assets/js/bootstrap.min.js"></script>

    <?php get_footer(  ); ?>
    
  </body>
</html>