<?php /* Template Name: Contacto */ get_header(); ?>

<div id="contact-page">

    <header class="banner-menu">
        <div class="top-1">
            <?php include('include/menu.php') ?>
        </div>
        <div class="slider-zone">
            <div class="slide-m">
                <img src="<?= get_field('contacto-banner-imagen'); ?>" alt="Contáctenos">
                <div class="banner-content">
                    <h5><?= get_field('contacto-banner-texto-1'); ?></h5>
                </div>
            </div>
        </div>
    </header>

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

    <div class="google-maps">
        <div id="map"></div>
    </div>

</div>
<?php get_footer(); ?>