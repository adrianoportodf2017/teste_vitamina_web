<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootspress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" >

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- ... -->
    <link href="<?php echo get_template_directory_uri()?>/assets/css/style.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

   <body class="body">
        <header class="">
            <div class="row ">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary menu ">
                    <div class="container ">
                        <a class="navbar-brand" href="<?= site_url()?>"> <img src="<?php echo get_template_directory_uri()?>/assets/image/logo.png" alt="Logo" class="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse menu-collapse menu-itens" id="collapsingNavbar">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#">A DESJOYAUX</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#">DIFERENCIAIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#">PISCINAS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#">INSPIRE-SE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#">SEJA FRANQUEADO</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="<?php echo site_url()?>/index.php/contato" class="btn btn-secondary contact-button ">CONTATO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
        </header>
	
	<div id="content" class="site-content">
		<?php if ( ! is_page_template( 'full-width-without-container.php' ) ): ?>
		<div class="container">
			<div class="content-area row">
		<?php endif; ?>