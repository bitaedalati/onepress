<?php
/**
 * The header for the OnePress theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400" rel="stylesheet" />
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <?php do_action('onepress_before_site_start'); ?>
   <div id="page" class="blog-page hfeed site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'onepress'); ?></a>

      <?php
      /**
       * @since 2.0.0
       */
      ?>

      <header role="banner" class="fp-active fixed-top shadow-section">
         <div class="container">
            <nav role="navigation" class="navbar  navbar-expand-lg px-0">
               <a accesskey="a" tabindex="0" href="/" class="navbar-brand">
                  <?php
                  echo '<img width="180" alt="ubeac" src="' . get_template_directory_uri() . '/assets/images/logo.svg">';
                  ?>
               </a>
               <button type="button" tabindex="" data-toggle="collapse" data-target="#mainNavbarCollapse" class="btn navbar-toggler responsive-menue-close d-xl-none p-0">
                  <?php
                  echo '<img class="menu-icon" alt="menu" src="' . get_template_directory_uri() . '/assets/images/menu.svg">';
                  ?>
               </button>

               <div class="responsive-menu collapse navbar-collapse-4 justify-content-center" id="mainNavbarCollapse">
                  <button data-toggle="collapse" data-target="#mainNavbarCollapse" tabindex="">
                     <?php
                     echo '<img style="width: 1.3em; height: 1.3em;" class="menu-icon" alt="cancel" src="' . get_template_directory_uri() . '/assets/images/cancel.svg">';
                     ?>
                  </button>
                  <ul class="navbar-nav justify-content-center">
                     <li><a accesskey="b" tabindex="">
                           <?php
                           echo '<img  class="mt-2 mb-5" width="120" height="50" alt="uBeac" src="' . get_template_directory_uri() . '/assets/images/logo.svg">';
                           ?>

                        </a></li>
                     <li class="nav-item active"><a accesskey="c" tabindex="" class="nav-link">Features</a></li>
                     <li class="nav-item"><a accesskey="d" tabindex="" class="nav-link">Devices</a></li>
                     <li class="nav-item"><a accesskey="e" tabindex="" class="nav-link">Consulting</a></li>
                     <li class="nav-item"><a accesskey="f" tabindex="" rel="noopener" target="_blank" href="https://hook.ubeac.io" class="nav-link">Hook</a></li>
                  </ul>
               </div>

               <div class="collapse navbar-collapse">
                  <ul class="navbar-nav justify-content-end ml-auto">
                     <li class="nav-item ml-3"><a accesskey="g" tabindex="" class="nav-link">Features</a></li>
                     <li class="nav-item ml-3"><a accesskey="h" tabindex="" class="nav-link">Devices</a></li>
                     <li class="nav-item ml-3"><a accesskey="k" tabindex="" class="nav-link">Consulting</a></li>
                     <li class="nav-item ml-3"><a rel="noopener" target="_blank" href="https://hook.ubeac.io" class="nav-link">Hook</a></li>
                  </ul>
                  <a target="_blank" rel="noopener" accesskey="l" tabindex="" href="https://ui.ubeac.io" class="btn btn-primary ml-md-3 ml-lg-4">Sign in</a>
               </div>

            </nav>



         </div>
      </header>
      <!-- .navbar -->