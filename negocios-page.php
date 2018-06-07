<?php /* Template Name: Negocios */ get_header(); ?>

<div id="business-page">
    
    <header class="banner-menu">
        <div class="top-1">
            <?php include('include/menu.php') ?>
        </div>
        <div class="slider-zone">
            <div class="slide-m">
                <img src="<?= get_field('negocios-banner-imagen'); ?>" alt="Negocios Especiales">
                <div class="banner-content">
                    <h5 style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 1);">
                        <?= get_field('negocios-banner-texto-1'); ?>
                    </h5>
                </div>
            </div>
        </div>
    </header>

    <section class="special-businesses">
        <div class="grid-container">
            <div class="grid-x grid-margin-x align-center">
                <div class="cell small-6 medium-6 large-4 business text-center">
                    <img src="<?= get_field('negocios_bloque_1_imagen_uno'); ?>" alt="Contrato gestión de residuos">
                    <h4>
                        <?= get_field('negocios_bloque_1_titulo_uno'); ?>
                    </h4>
                    <?= get_field('negocios_bloque_1_contenido_uno'); ?>
                </div>
                <div class="cell small-12 medium-6 large-4 business text-center">
                    <img src="<?= get_field('negocios_bloque_1_imagen_dos'); ?>" alt="Logística y transporte">
                    <h4>
                        <?= get_field('negocios_bloque_1_titulo_dos'); ?>
                    </h4>
                    <?= get_field('negocios_bloque_1_contenido_dos'); ?>
                </div>
                <div class="cell small-12 medium-6 large-4 business text-center">
                    <img src="<?= get_field('negocios_bloque_1_imagen_tres'); ?>" alt="">
                    <h4>
                        <?= get_field('negocios_bloque_1_titulo_tres'); ?>
                    </h4>
                    <?= get_field('negocios_bloque_1_contenido_tres'); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>