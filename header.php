<?php
/*
Template Name: case3
*/
?>

   <!DOCTYPE html>
   <html lang="en">

   <head>

	  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	  <title>
		 <?php
			wp_title( '|', true, 'right' );
		  bloginfo( 'name' );
		 ?>
		 </title>
		 <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		 <?php if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
		 ?>
    <!--[if (gte IE 9)|!(IE)]><!-->
     </head>

     <body id="page-top">
       <?php if ( is_front_page() ) :	?>
       <header class="masthead">
         <div class="container d-flex h-100 align-items-center">
           <div class="mx-auto text-center">
             <h1 class="mx-auto my-0 text-uppercase"><a href="<?php bloginfo('url');?>">My Blog</a></h1>
             <h2 class="text-white-50 mx-auto mt-2 mb-5">A Simple extraordinary Blog.</h2>
             <a href="#projects" class="btn btn-primary js-scroll-trigger">Get Started</a>
           </div>
         </div>
       </header>

       <!-- About Section -->
       <section id="about" class="about-section text-center">
         <div class="container">
           <div class="row">
             <div class="col-lg-8 mx-auto">
               <h2 class="text-white mb-4">Built with Bootstrap 4</h2>
               <p class="text-white-50">A WordPress Blog with Bootstrap</p>
             </div>
           </div>
           <img src="img/ipad.png" class="img-fluid" alt="">
         </div>
       </section>
     <?php else :	?>
       <div class="container">
         <div class="row">
         <div class="col-xl-12 col-lg-12">
       <div id="header">
           <h1 class="blogtitle">MY BLOG</h1>
           <p class="description">A WordPress Blog with Bootstrap</p>
           <div id="menu">
           <ul>
           <li><a href="<?php bloginfo('url');?>">Home</a></li>
           <?php wp_list_pages('title_li='); ?>
           </ul>
           </div>
          </div>
        </div>
        </div>
        </div>

     <?php endif;?>


<!--
       <!-- Navigation --+>
       <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
         <div class="container">
           <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
           <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             Menu
             <i class="fas fa-bars"></i>
           </button>
           <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                 <a class="nav-link js-scroll-trigger" href="#about">About</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
               </li>
             </ul>
           </div>
         </div>
       </nav>
-->
