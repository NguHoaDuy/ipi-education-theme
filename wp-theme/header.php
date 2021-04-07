<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class( ); ?>>
    <div class="container-fluid">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-orange">
            <div class="col-md-1">

            </div>
            <div class="col-md-4">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-7 row">
                <?php ipi_menu('primary-menu'); ?>
            </div>
        </nav>