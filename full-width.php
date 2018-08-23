<?php
/*
*
Template Name: Full-Width
*/
get_header(); ?>

<!-- Projects Section -->
<section id="projects" class="projects-section bg-light">
  <div class="container">

    <!-- Featured Project Row -->
    <div class="container">
      <div class="row">
      <div class="col-xl-12 col-lg-12">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
          	<?php
            // Include the page content template.
            get_template_part( 'page', 'tos' ); ?>
              </main>
            </div>
          </div>
        </div>
      </div>
      </section>
<?php
get_footer();
