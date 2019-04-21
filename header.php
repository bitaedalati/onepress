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
   <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/favicon.ico" />
   <!-- Link in uBeac index.html -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <meta http-equiv="content-language" content="en"/>
   <meta http-equiv="X-UA-Compatible" content="IE=Edge">
   <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
   <meta name="format-detection" content="telephone=no">
   <meta name="apple-mobile-web-app-capable" content="yes"/>
   <meta name="google-site-verification" content="wxwx3uDoA2ESGruKNqrOaDgQgtCwISyUvtVYzvpjmxc" />
   <link rel="next" href="https://www.ubeac.io"/>
   <meta name="description" content="uBeac is a powerful, versatile, and free IoT platform which is designed to help you easily build your real-time IoT idea.">
   <meta property="description" content="uBeac is a powerful, versatile, and free IoT platform which is designed to help you easily build your real-time IoT idea.">

   <meta name=dc.language content=UK>
   <meta name=dc.source content=https://www.ubeac.io/>
   <meta name=dc.relation content=https://www.ubeac.io/>
   <meta name=dc.title content="uBeac a powerful and easy to use Internet of Things (IoT) platform">
   <meta name=dc.description content="uBeac is a powerful, versatile, and free IoT platform which is designed to help you easily build your real-time IoT idea.">

   <meta property="og:url" content="https://www.ubeac.io">
   <meta property="og:title" content="uBeac a powerful and easy to use Internet of Things (IoT) platform">
   <meta property="og:site_name" content="uBeac">
   <meta property="og:description" content="uBeac is a powerful, versatile, and free IoT platform which is designed to help you easily build your real-time IoT idea.">
   <meta property=og:locale content="en_GB">
   <meta property=og:type content="website">
   <meta property="og:image" content="https://ubeac.io/img/logo-social.png">
   <meta property="og:image:secure_url" content="https://ubeac.io/img/logo-social.png">
   <meta property="og:image:width" content="200">
   <meta property="og:image:height" content="200">
   <meta property="og:image:type" content="image/png">
   <meta property="fb:app_id" content="835714826821351">

   <meta name="twitter:card" content="summary">
   <meta name="twitter:site" content="@ubeacio">
   <meta name="twitter:title" content="uBeac a powerful and easy to use Internet of Things (IoT) platform">
   <meta name="twitter:description" content="uBeac is a powerful, versatile, and free IoT platform which is designed to help you easily build your real-time IoT idea.">
   <meta name="twitter:image" content="https://ubeac.io/img/logo-social.png"> 
</head>

<body <?php body_class(); ?>>
   <?php do_action('onepress_before_site_start'); ?>
   <div id="page" class="wordpress-page hfeed site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'onepress'); ?></a>

      <?php
      /**
       * @since 2.0.0
       */
      ?>

      <header role="banner" class="fp-active fixed-top">
         <div class="container">
            <nav role="navigation" class="navbar  navbar-expand-lg px-0">
               <a accesskey="a" tabindex="0" href="/" class="navbar-brand">
                  <?php
                  echo '<img width="190" alt="ubeac" src="' . get_template_directory_uri() . '/assets/images/logo.svg">';
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
                           echo '<img  class="mt-2 mb-5" width="192"  alt="uBeac" src="' . get_template_directory_uri() . '/assets/images/logo.svg">';
                           ?>
                        </a></li>
                     <li class="nav-item active">
                        <a href="/#features" class="nav-link">
                           Features
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="/#devices" class="nav-link">
                           Devices
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="/#consulting" class="nav-link">
                           Consulting
                        </a>
                     </li>
                     <li class="nav-item">
                        <a accesskey="f" tabindex="" rel="noopener" target="_blank" href="https://hook.ubeac.io" class="nav-link">
                           Hook
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="collapse navbar-collapse">
                  <ul class="navbar-nav justify-content-end ml-auto">
                     <li class="nav-item ml-3">
                        <a href="/#features" class="nav-link">
                           Features
                        </a>
                     </li>
                     <li class="nav-item ml-3">
                        <a href="/#devices" class="nav-link">
                           Devices
                        </a>
                     </li>
                     <li class="nav-item ml-3">
                        <a href="/#consulting" class="nav-link">
                           Consulting
                        </a>
                     </li>
                     <li class="nav-item ml-3"><a rel="noopener" target="_blank" href="https://hook.ubeac.io" class="nav-link">Hook</a></li>
                  </ul>
                  <a target="_blank" rel="noopener" accesskey="l" tabindex="" href="https://ui.ubeac.io" class="btn btn-primary ml-md-3 ml-lg-4">Sign in</a>
               </div>
            </nav>
         </div>
      </header>
      <script>
         window.addEventListener('scroll', function() {
            if (window.scrollY > 0) {
               let header = document.querySelector('header')
               header.classList.add('shadow-section')
            }
            if (window.scrollY === 0) {
               let header = document.querySelector('header')
               header.classList.remove('shadow-section')
            }
         })
      </script>
      <!-- .navbar -->