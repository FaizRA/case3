


<?php
/**
 * Template Name: bukan
 */
 get_header(); ?>

 <!-- Projects Section -->
 <section id="projects" class="projects-section bg-light">
   <div class="container">

     <!-- Featured Project Row -->
     <div class="container">
       <div class="row">
       <div class="col-xl-8 col-lg-7">
<?php
//cari kategori
$category_id = get_cat_ID('Bukan Saya');
$q = 'cat=' . $category_id;
query_posts($q);
if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <br>
       <!-- LOOP POST -->
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_excerpt();
      echo '<a href="' . esc_url( get_the_permalink() ) . '"> more...</a>'; ?></p>
      <div id="postmeta">Publish on <?php the_time('F jS, Y'); ?> under <?php the_category(', '); ?> by <?php the_author(); ?> |
      <?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?>
      <?php edit_post_link('Edit','','|'); ?></div>
      </div>
      <?php comments_template(); ?>
      <hr>
    <?php endwhile;?>
<!-- pagination -->
<br>
<<?php previous_posts_link(); ?>|<?php next_posts_link(); ?>>

<?php else : ?>
<!-- No posts found -->
<?php endif;?>

<?php wp_reset_query(); ?>


</div>

<?php
get_sidebar();
get_footer();
