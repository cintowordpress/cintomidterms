<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Bootstrap core CSS -->
    <link href="http://localhost/animaniac/wp-content/themes/blank/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://localhost/animaniac/wp-content/themes/blank/template/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/animaniac/wp-content/themes/blank/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blank' ); ?></a>

	<!-- Header -->
    <header style="background-color: #1c1919;">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2 style="color: red">Ani<em style="color: white;">maniac</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a style="color: white; " class="nav-link" href="http://localhost/animaniac/home">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"style="color: white;" href="http://localhost/animaniac/shop">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white;" href="http://localhost/animaniac/cart">Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white;" href="http://localhost/animaniac/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: white;" href="http://localhost/animaniac/contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
