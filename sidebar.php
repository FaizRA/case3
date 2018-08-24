<div class="col-xl-4 col-lg-5" style="padding-top:0px;margin-top:0px;">
  <div id="sidebar" class="featured-text text-center text-lg-left" style="padding-top:0px;margin-top:0px;">

    <h4>Sample wp query</h4>
    <?php
    //cari kategori
    $category_id = get_cat_ID('Bukan Saya');
    $q = 'cat=' . $category_id;
    query_posts($q);
    if ( have_posts() ) : ?>
    <ul>
    <?php while ( have_posts() ) : the_post(); ?>
       <!-- LOOP POST -->
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <li class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>

    <?php endwhile;?>
  </ul>
    <?php else : ?>
    <!-- No posts found -->
    <?php endif;?>

    <?php wp_reset_query(); ?>


    <h4>Menu [[PR]]</h4>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'my-custom-menu' ) );
    ?>
<h4>Menu2 [[PR]]</h4>
<?php
wp_nav_menu( array(
    'theme_location' => 'extra-menu' ) );
?>
    <h4>Search</h4>
    <ul>
      <?php get_search_form(); ?>
    </ul>
    <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
    <h4>Archive</h4>
    <ul>


      <?php wp_get_archives( 'type=monthly' ); ?>


   </ul>

   <?php endif; ?>
   <!--
       <h4>Recent Post</h4>

        <ul>
        <?php
        $args = array( 'numberposts' => '5' );
        $recent_posts = wp_get_recent_posts( $args );
          foreach( $recent_posts as $recent ){
            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
          }
          wp_reset_query();
        ?>
        </ul>
      <h4>Recent Comment</h4>
      <?php
      $args = array (
      'status' => 'approve',
      'number' => '5'
      );
      $comments = get_comments( $args );
      if ( !empty( $comments ) ) :
      echo '<ul>';
      foreach( $comments as $comment ) :
      echo '<li><a href="' . get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID . '">' . $comment->comment_author . ' on ' . get_the_title( $comment->comment_post_ID ) . '</a></li>';
      endforeach;
      echo '</ul>';
      endif;
       ?>
     -->
       <h4>ELse</h4>
       <ul>
       <?php wp_list_pages('title_li='); ?>
     </ul>

    </div>
</div>

</div>
</div>
</section>
