<?php /* Template Name: Servicios */ get_header(); ?>

<div id="services-page">

    <header class="banner-menu">
        <div class="top-1">
            <?php include('include/menu.php') ?>
        </div>
        <div class="slider-zone">
            <div class="slide-m">
                <img src="<?= get_field('servicios-banner-imagen'); ?>" alt="Servicios">
                <div class="banner-content">
                    <h5 style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 1);">
                        <?= get_field('servicios-banner-texto-1'); ?>
                    </h5>
                </div>
            </div>
        </div>
    </header>

    <div class="services-section">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell small-12 medium-4 accordion-buttons">
                    <a class="accordion-title title-1 btn-active" id="accordion-title-1">
                        <?= get_field('servicios_bloque_1_titulo'); ?>
                    </a>
                    <a class="accordion-title title-2" id="accordion-title-2">
                        <?= get_field('servicios_bloque_2_titulo'); ?>
                    </a>
                    <a class="accordion-title title-3" id="accordion-title-3">
                        <?= get_field('servicios_bloque_3_titulo'); ?>
                    </a>
                    <a class="accordion-title title-4" id="accordion-title-4">
                        <?= get_field('servicios_bloque_4_titulo'); ?>
                    </a>
                    <a class="accordion-title title-5" id="accordion-title-5">
                        <?= get_field('servicios_bloque_5_titulo'); ?>
                    </a>
                </div>
                <div class="cell small-12 medium-8 content" id="servicios">
                    <div class="accordion-content-1 active">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell">
                                    <h3>
                                        <?= get_field('servicios_bloque_1_titulo'); ?>
                                    </h3>
                                    <?= get_field('servicios_bloque_1_contenido'); ?>
                                    <div class="slider-wrapper">
                                        <div class="slider-services">
                                            <img src="<?= get_field('servicios_bloque_1_imagen_uno'); ?>"
                                                 alt="" class="main-image">
                                            <img src="<?= get_field('servicios_bloque_1_imagen_dos'); ?>"
                                                 alt="" class="main-image">
                                            <img src="<?= get_field('servicios_bloque_1_imagen_tres'); ?>"
                                                 alt="" class="main-image">
                                            <img src="<?= get_field('servicios_bloque_1_imagen_cuatro'); ?>"
                                                 alt="" class="main-image">
                                        </div>
                                        <div class="slider-nav show-for-large">
                                            <img src="<?= get_field('servicios_bloque_1_imagen_uno'); ?>"
                                                 alt="">
                                            <img src="<?= get_field('servicios_bloque_1_imagen_dos'); ?>"
                                                 alt="">
                                            <img src="<?= get_field('servicios_bloque_1_imagen_tres'); ?>"
                                                 alt="">
                                            <img src="<?= get_field('servicios_bloque_1_imagen_cuatro'); ?>"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-content-2">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell">
                                    <h3>
                                        <?= get_field('servicios_bloque_2_titulo'); ?>
                                    </h3>
                                    <?= get_field('servicios_bloque_2_contenido'); ?>
                                    <div class="slider-wrapper">
                                        <div class="slider-services">
                                            <img src="<?= get_field('servicios_bloque_2_imagen_uno'); ?>" alt=""
                                                 class="main-image">
                                            <img src="<?= get_field('servicios_bloque_2_imagen_dos'); ?>" alt=""
                                                 class="main-image">
                                            <img src="<?= get_field('servicios_bloque_2_imagen_tres'); ?>" alt=""
                                                 class="main-image">
                                            <img src="<?= get_field('servicios_bloque_2_imagen_cuatro'); ?>" alt=""
                                                 class="main-image">
                                        </div>
                                        <div class="slider-nav show-for-large">
                                            <img src="<?= get_field('servicios_bloque_2_imagen_uno'); ?>" alt="">
                                            <img src="<?= get_field('servicios_bloque_2_imagen_dos'); ?>" alt="">
                                            <img src="<?= get_field('servicios_bloque_2_imagen_tres'); ?>" alt="">
                                            <img src="<?= get_field('servicios_bloque_2_imagen_cuatro'); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-content-3">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell">
                                    <h3>
                                        <?= get_field('servicios_bloque_3_titulo'); ?>
                                    </h3>
                                    <?= get_field('servicios_bloque_3_contenido'); ?>
                                    <div class="slider-wrapper">
                                        <img src="<?= get_field('servicios_bloque_3_imagen'); ?>" alt=""
                                             class="main-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-content-4">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell">
                                    <h3>
                                       <?= get_field('servicios_bloque_4_titulo'); ?>
                                    </h3>
                                    <?= get_field('servicios_bloque_4_contenido'); ?>
                                    <div class="slider-wrapper">
                                        <div class="slider-services">
                                            <img src="<?= get_field('servicios_bloque_4_imagen_uno'); ?>" alt=""
                                                 class="main-image">
                                            <img src="<?= get_field('servicios_bloque_4_imagen_dos'); ?>" alt=""
                                                 class="main-image">
                                            <img src="<?= get_field('servicios_bloque_4_imagen_tres'); ?>" alt=""
                                                 class="main-image">
                                            <img src="<?= get_field('servicios_bloque_4_imagen_cuatro'); ?>" alt=""
                                                 class="main-image">
                                        </div>
                                        <div class="slider-nav show-for-large">
                                            <img src="<?= get_field('servicios_bloque_4_imagen_uno'); ?>" alt="">
                                            <img src="<?= get_field('servicios_bloque_4_imagen_dos'); ?>" alt="">
                                            <img src="<?= get_field('servicios_bloque_4_imagen_tres'); ?>" alt="">
                                            <img src="<?= get_field('servicios_bloque_4_imagen_cuatro'); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-content-5 certifications">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell">
                                    <h3>
                                        <span><?= get_field('servicios_bloque_5_titulo'); ?></span>
                                    </h3>
                                    <div class="grid-x">
                                        <div class="cell download-document">
                                            <p>
                                                <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/underscore.png" alt=""> 
                                                <?= get_field('servicios_bloque_5_contenido_uno'); ?>
                                            </p>
                                            <a href="<?= get_field('servicios_bloque_5_archivo_uno'); ?>" class="btn-download">Descargar <img
                                                    src="<?php bloginfo('template_url' ); ?>/assets/img/icons/download.png" alt=""
                                                    class="show-for-large"></a>
                                        </div>
                                    </div>
                                    <div class="grid-x">
                                        <div class="cell download-document">
                                            <p>
                                                <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/underscore.png" alt=""> 
                                                <?= get_field('servicios_bloque_5_contenido_dos'); ?>
                                            </p>
                                            <a href="<?= get_field('servicios_bloque_5_archivo_dos'); ?>" class="btn-download">Descargar <img
                                                    src="<?php bloginfo('template_url' ); ?>/assets/img/icons/download.png" alt=""
                                                    class="show-for-large"></a>
                                        </div>
                                    </div>
                                    <div class="grid-x">
                                        <div class="cell download-document">
                                            <p>
                                                <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/underscore.png" alt="">
                                                <?= get_field('servicios_bloque_5_contenido_tres'); ?>
                                            </p>
                                            <a href="<?= get_field('servicios_bloque_5_archivo_tres'); ?>" class="btn-download">Descargar <img
                                                    src="<?php bloginfo('template_url' ); ?>/assets/img/icons/download.png" alt=""
                                                    class="show-for-large"></a>
                                        </div>
                                    </div>
                                    <div class="grid-x">
                                        <div class="cell download-document">
                                            <p>
                                                <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/underscore.png" alt="">
                                                <?= get_field('servicios_bloque_5_contenido_cuatro'); ?>
                                            </p>
                                            <a href="<?= get_field('servicios_bloque_5_archivo_cuatro'); ?>" class="btn-download">Descargar <img
                                                    src="<?php bloginfo('template_url' ); ?>/assets/img/icons/download.png" alt=""
                                                    class="show-for-large"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section">
        <div class="grid-x">
            <div class="cell small-12 medium-6 contact-information">
                <div class="overlay">
                    <h3><?=of_get_option('form-contact-title');?></h3>
                    <div class="text-left">
                        <?=of_get_option('form-contact-content');?>
                    </div>
                </div>
            </div>
            <div class="cell small-12 medium-6 contact-form">
                <div class="cell small-12 medium-6 contact-form">
                    <form id="contactoform" method="post">
                        <input type="hidden" name="action" value="mailer">
                        <input type="hidden" name="module" value="consulta">
                        <input type="hidden" name="email_contact" value="<?=of_get_option('email-contact');?>">

                        <div class="grid-container">
                            <div class="grid-x grid-margin-x">
                                <div class="cell small-12 medium-12">
                                    <div class="content-alert content-alert-success">Mensaje enviado!!!</div>
                                    <div class="content-alert content-alert-error">Hubo un error!!!</div>
                                </div>
                                <div class="cell small-12 medium-12">
                                    <input type="text" class="nombre" name="nombre" placeholder="Nombre completo">
                                </div>
                                <div class="cell small-12 medium-6">
                                    <input type="text" class="telefono" name="telefono" placeholder="Número de contacto">
                                </div>
                                <div class="cell small-12 medium-6">
                                    <input type="email" class="email" name="email" placeholder="Correo electrónico">
                                </div>
                                <div class="cell small-12 medium-12">
                                    <textarea class="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
                                </div>
                                <input type="submit" value="ENVIAR" class="btn-submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>