<?php /* Template Name: Productos */ get_header(); ?>

<div id="products-page">

    <header class="banner-menu">
        <div class="top-1">
            <?php include('include/menu.php') ?>
        </div>
        <div class="slider-zone">
            <div class="slide-m">
                <img src="<?= get_field('productos-banner-imagen'); ?>" alt="Productos">
                <div class="banner-content">
                    <h5 style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 1);">
                        <?= get_field('productos-banner-texto-1'); ?>
                    </h5>
                </div>
            </div>
        </div>
    </header>

    <div class="our-products">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell small-12 large-6 accordion">
                    <div class="products-accordion-slider">
                        <div class="accordion-image">
                            <img src="<?= get_field('productos_bloque_1_imagen_uno'); ?>" alt="">
                        </div>
                        <div class="accordion-image">
                            <img src="<?= get_field('productos_bloque_1_imagen_dos'); ?>" alt="">
                        </div>
                        <div class="accordion-image">
                            <img src="<?= get_field('productos_bloque_1_imagen_tres'); ?>" alt="">
                        </div>
                        <div class="accordion-image">
                            <img src="<?= get_field('productos_bloque_1_imagen_cuatro'); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="cell small-12 large-6 text">
                    <div class="content-text">
                        <?= get_field('productos_bloque_1_contenido'); ?>
                        <div class="contact-btn-wrapper">
                            <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue.png" alt="">
                            <a href="./contacto">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container images">
        <div class="grid-x">
            <div class="cell">
                <a href="javascript:void(0);" id="products-nav-prev-arrow" class="show-for-large">
                    <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue-left.png" alt="">
                </a>
                <div class="slider-products-nav">
                    <img src="<?= get_field('productos_bloque_1_imagen_uno'); ?>" alt="">
                    <img src="<?= get_field('productos_bloque_1_imagen_dos'); ?>" alt="">
                    <img src="<?= get_field('productos_bloque_1_imagen_tres'); ?>" alt="">
                    <img src="<?= get_field('productos_bloque_1_imagen_cuatro'); ?>" alt="">
                </div>
                <a href="javascript:void(0);" id="products-nav-next-arrow" class="show-for-large">
                    <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue-right.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <!-- <div class="images">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell">
                    <a href="#"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue.png" alt="" class="arrow"></a>
                    <img src="<?php bloginfo('template_url' ); ?>/assets/img/products.png" alt="">
                    <img src="<?php bloginfo('template_url' ); ?>/assets/img/products.png" alt="">
                    <img src="<?php bloginfo('template_url' ); ?>/assets/img/products.png" alt="">
                    <img src="<?php bloginfo('template_url' ); ?>/assets/img/products.png" alt="">
                    <img src="<?php bloginfo('template_url' ); ?>/assets/img/products.png" alt="">
                    <a href="#"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue.png" alt="" class="arrow"></a>
                </div>
            </div>
        </div>
    </div> -->

    <div class="google-maps">
        <div id="map"></div>
    </div>
</div>
<?php get_footer(); ?>