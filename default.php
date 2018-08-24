<?php
/*
*
Template Name: default
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
            // Include the page content template.
            get_template_part( 'page' );

            ?>

          </div>

<?php
get_sidebar();
get_footer();
