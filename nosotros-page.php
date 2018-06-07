<?php /* Template Name: Nosotros */ get_header(); ?>

<div id="about-us-page">

    <header class="banner-menu">
        <div class="top-1">
            <?php include('include/menu.php') ?>
        </div>
        <div class="slider-zone">
            <div class="slide-m">
                <img src="<?= get_field('nosotros-banner-imagen'); ?>" alt="Nosotros">
                <div class="banner-content">
                    <h5 style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 1);">
                        <?= get_field('nosotros-banner-texto-1'); ?>
                    </h5>
                </div>
            </div>
        </div>
    </header>

    <section class="ambiental-engineering">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell small-12 medium-6">
                    <h3>
                       <?= get_field('nosotros_bloque_1_titulo'); ?>
                    </h3>
                    <?= get_field('nosotros_bloque_1_contenido'); ?>
                </div>
                <div class="cell small-12 medium-6 text-center">
                    <img src="<?= get_field('nosotros_bloque_1_imagen'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="contact-info">
        <div class="grid-container text-center">
            <div class="grid-x">
                <div class="cell small-12 medium-4 call-us-section">
                    <img src="<?= get_field('nosotros_bloque_2_imagen_uno'); ?>" alt="">
                    <div class="call-us">
                        <div class="little-border"></div>
                        <h3><?= get_field('nosotros_bloque_2_titulo_uno'); ?></h3>
                        <?= get_field('nosotros_bloque_2_contenido_uno'); ?>
                    </div>
                </div>
                <div class="cell small-12 medium-4 find-us-section">
                    <img src="<?= get_field('nosotros_bloque_2_imagen_dos'); ?>" alt="">
                    <div class="find-us">
                        <div class="little-border"></div>
                        <h3><?= get_field('nosotros_bloque_2_titulo_dos'); ?></h3>
                        <?= get_field('nosotros_bloque_2_contenido_dos'); ?>
                    </div>
                </div>
                <div class="cell small-12 medium-4 write-us-section">
                    <img src="<?= get_field('nosotros_bloque_2_imagen_tres'); ?>" alt="">
                    <div class="write-us">
                        <div class="little-border"></div>
                        <h3><?= get_field('nosotros_bloque_2_titulo_tres'); ?></h3>
                        <?= get_field('nosotros_bloque_2_contenido_tres'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vision">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12 medium-6">
                    <h3><?= get_field('nosotros_bloque_3_titulo_uno'); ?></h3>
                    <?= get_field('nosotros_bloque_3_contenido_uno'); ?>
                </div>
                <div class="cell small-12 medium-6">
                    <h3><?= get_field('nosotros_bloque_3_titulo_dos'); ?></h3>
                    <?= get_field('nosotros_bloque_3_contenido_dos'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="principles">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell-small-12 medium-6">
                    <h3>
                        <?= get_field('nosotros_bloque_4_titulo'); ?>
                    </h3>
                </div>
                <div class="cell-small-12 medium-6">
                    <div class="values">
                        <?= get_field('nosotros_bloque_4_contenido'); ?>
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