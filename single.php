<?php
get_header();?>

<!-- Projects Section -->
<section id="projects" class="projects-section bg-light">
  <div class="container">

    <!-- Featured Project Row -->
    <div class="container">
      <div class="row">
      <div class="col-xl-8 col-lg-7">



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
            <h4>
            <
            <?php
            $prev_post = get_previous_post();
            if (!empty( $prev_post )): ?>
              <a href="<?php echo $prev_post->guid ?>"><?php echo $prev_post->post_title ?></a>
            <?php endif ?>
            |
            <?php
            $next_post = get_next_post();
            if (!empty( $next_post )): ?>
              <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_attr( $next_post->post_title ); ?></a>
            <?php endif; ?>
            >
            </h4>
            <?php

              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;

              	endwhile;
            ?>



      </div>
      <!-- SIDEBAR -->

    <!--
      <!-- Project One Row --+>
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Misty</h4>
                <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row --+>
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Mountains</h4>
                <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    </section>



    <!-- Signup Section --+>
    <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
    </section>
    -->



    <?php
    get_sidebar();
    get_footer();
