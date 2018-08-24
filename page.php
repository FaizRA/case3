
            <?php
// Start the loop.
            while ( have_posts() ) : the_post();
            ?>
          <h1><?php
            the_title();
          ?></h1>
          <br>
          <p>
            <?php
              the_content();
            ?>
          </p>
            <br><br>

            <?php

              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;

              	endwhile;
            ?>

            
