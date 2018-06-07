<?php /* Template Name: Inicio */ get_header(); ?>

<div id="home-page">

    <header style="max-height: initial;" class="banner-menu">
        <div class="top-1">
            <?php include('include/menu.php') ?>
        </div>
        <div class="slider-zone">
            <div class="slide-m">
                <img src="<?= get_field('incio-banner-imagen'); ?>" alt="Inicio">
                <div class="banner-content">
                    <p style="color: #444;"><?= get_field('incio-banner-texto-1'); ?></p>
                    <h5 style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 1);"><?= get_field('incio-banner-texto-2'); ?></h5>
                    <h3 style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 1);"><?= get_field('incio-banner-texto-3'); ?></h3>
                    <a href="<?= get_field('incio-banner-url'); ?>" style="text-shadow: 1px 1px 5px rgba(0, 0, 0, 1);"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-right.png" alt=""> Leer más</a>
                </div>
            </div>
        </div>
    </header>

	<div class="services-accordion-slider">
	    <div class="our-services">
	        <div class="grid-container">
	            <h3 class="services-title"><?= get_field('inicio_bloque_1_titulo_uno'); ?></span></h3>
	            <div class="border"></div>
	            <div class="grid-x">
	                <div class="cell small-12 medium-6 accordion">
	                    <div class="accordion-image">
	                        <img src="<?= get_field('inicio_bloque_1_imagen_uno'); ?>" alt="">
	                    </div>
	                </div>
	                <div class="cell small-12 medium-6 text">
	                    <div class="content-text">
	                        <h3>
	                            <?= get_field('inicio_bloque_1_subtitulo_uno'); ?>
	                        </h3>
	                        <div class="read-more-btn-wrapper">
	                            <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue.png" alt="">
	                            <a href="servicios#servicios">Leer más</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="our-services">
	        <div class="grid-container">
	            <h3 class="services-title"><?= get_field('inicio_bloque_1_titulo_dos'); ?></h3>
	            <div class="border"></div>
	            <div class="grid-x">
	                <div class="cell small-12 medium-6 accordion">
	                    <div class="accordion-image">
	                        <img src="<?= get_field('inicio_bloque_1_imagen_dos'); ?>" alt="">
	                    </div>
	                </div>
	                <div class="cell small-12 medium-6 text">
	                    <div class="content-text">
	                        <h3>
	                            <?= get_field('inicio_bloque_1_subtitulo_dos'); ?>
	                        </h3>
	                        <div class="read-more-btn-wrapper">
	                            <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue.png" alt="">
	                            <a href="servicios#servicios">Leer más</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="our-services">
	        <div class="grid-container">
	            <h3 class="services-title"><?= get_field('inicio_bloque_1_titulo_tres'); ?></h3>
	            <div class="border"></div>
	            <div class="grid-x">
	                <div class="cell small-12 medium-6 accordion">
	                    <div class="accordion-image">
	                        <img src="<?= get_field('inicio_bloque_1_imagen_tres'); ?>" alt="">
	                    </div>
	                </div>
	                <div class="cell small-12 medium-6 text">
	                    <div class="content-text">
	                        <h3>
	                            <?= get_field('inicio_bloque_1_subtitulo_tres'); ?>
	                        </h3>
	                        <div class="read-more-btn-wrapper">
	                            <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue.png" alt="">
	                            <a href="servicios#servicios">Leer más</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="our-services">
	        <div class="grid-container">
	            <h3 class="services-title"><?= get_field('inicio_bloque_1_titulo_cuatro'); ?></h3>
	            <div class="border"></div>
	            <div class="grid-x">
	                <div class="cell small-12 medium-6 accordion">
	                    <div class="accordion-image">
	                        <img src="<?= get_field('inicio_bloque_1_imagen_cuatro'); ?>" alt="">
	                    </div>
	                </div>
	                <div class="cell small-12 medium-6 text">
	                    <div class="content-text">
	                        <h3>
	                            <?= get_field('inicio_bloque_1_subtitulo_cuatro'); ?>
	                        </h3>
	                        <div class="read-more-btn-wrapper">
	                            <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue.png" alt="">
	                            <a href="servicios#servicios">Leer más</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="our-services">
	        <div class="grid-container">
	            <h3 class="services-title"><?= get_field('inicio_bloque_1_titulo_cinco'); ?></h3>
	            <div class="border"></div>
	            <div class="grid-x">
	                <div class="cell small-12 medium-6 accordion">
	                    <div class="accordion-image">
	                        <img src="<?= get_field('inicio_bloque_1_imagen_cinco'); ?>" alt="">
	                    </div>
	                </div>
	                <div class="cell small-12 medium-6 text">
	                    <div class="content-text">
	                        <h3>
	                            <?= get_field('inicio_bloque_1_subtitulo_cinco'); ?>
	                        </h3>
	                        <div class="read-more-btn-wrapper">
	                            <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue.png" alt="">
	                            <a href="servicios#servicios">Leer más</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<p class="hide-for-large guide">
	    <   desliza a izquierda o derecha   >
	</p>
	<div class="grid-container images show-for-large">
	    <div class="grid-x">
	        <div class="cell">
	            <div class="slider-services-nav">
	                <img src="<?= get_field('inicio_bloque_1_imagen_slider_uno'); ?>" alt="">
	                <img src="<?= get_field('inicio_bloque_1_imagen_slider_dos'); ?>" alt="">
	                <img src="<?= get_field('inicio_bloque_1_imagen_slider_tres'); ?>" alt="">
	                <img src="<?= get_field('inicio_bloque_1_imagen_slider_cuatro'); ?>" alt="">
	                <img src="<?= get_field('inicio_bloque_1_imagen_slider_cinco'); ?>" alt="">
	            </div>
	        </div>
	    </div>
	</div>


	<div class="contact-info">
	    <div class="grid-container text-center">
	        <div class="grid-x">
	            <div class="cell small-12 medium-6 call-us-section">
	                <img src="<?= get_field('inicio_bloque_2_imagen_uno'); ?>" alt="">
	                <div class="call-us">
	                    <div class="little-border"></div>
	                    <?= get_field('inicio_bloque_2_contenido_uno'); ?>
	                </div>
	            </div>
	            <div class="cell small-12 medium-6 find-us-section">
	                <img src="<?= get_field('inicio_bloque_2_imagen_dos'); ?>" alt="">
	                <div class="find-us">
	                    <div class="little-border"></div>
	                    <?= get_field('inicio_bloque_2_contenido_dos'); ?>
	                </div>
	            </div>
	            <div class="cell small-12 medium-6 write-us-section">
	                <img src="<?= get_field('inicio_bloque_2_imagen_tres'); ?>" alt="">
	                <div class="write-us">
	                    <div class="little-border"></div>
	                    <?= get_field('inicio_bloque_2_contenido_tres'); ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="our-products">
	    <div class="grid-container">
	        <div class="grid-x">
	            <div class="cell small-12 medium-6">
	                <div class="products-image">
	                    <img src="<?= get_field('inicio_bloque_3_imagen_uno'); ?>" alt="">
	                </div>
	            </div>
	            <div class="cell small-12 medium-6 text">
	                <div class="content-text">
	                    <h3>
	                        <?= get_field('inicio_bloque_3_titulo_uno'); ?>
	                    </h3>
	                    <p>
	                        <?= get_field('inicio_bloque_3_contenido_uno'); ?>
	                    </p>
	                    <a href="./productos"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue.png" alt=""> Leer
	                        más</a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="ambiental-solutions">
	    <div class="grid-container">
	        <div class="grid-x">
	            <div class="cell small-12 medium-6">
	                <h3>
	                    <?= get_field('inicio_bloque_3_titulo_dos'); ?>
	                </h3>
	                <p>
	                    <?= get_field('inicio_bloque_3_contenido_dos'); ?>
	                </p>
	                <a href="./nosotros"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/arrow-blue.png" alt=""> Leer más</a>
	            </div>
	            <div class="cell small-12 medium-6 text-center">
	                <img src="<?= get_field('inicio_bloque_3_imagen_dos'); ?>" alt="">
	            </div>
	        </div>
	    </div>
	</div>

	<div class="contact-section">
	    <div class="grid-x">
	        <div class="cell small-12 medium-6 contact-information">
	            <div class="overlay">
	                <h3><?= get_field('inicio_bloque_4_titulo'); ?></h3>
	                <div class="text-left">
	                    <?= get_field('inicio_bloque_4_contenido'); ?>
	                </div>
	            </div>
	        </div>
	        <div class="cell small-12 medium-6 contact-form">
	            <form action="">
	                <div class="grid-container">
	                    <div class="grid-x grid-margin-x">
	                        <div class="cell small-12 medium-12">
	                            <input type="text" placeholder="Nombre completo">
	                        </div>
	                        <div class="cell small-12 medium-6">
	                            <input type="text" placeholder="Número de contacto">
	                        </div>
	                        <div class="cell small-12 medium-6">
	                            <input type="email" placeholder="Correo electrónico">
	                        </div>
	                        <div class="cell small-12 medium-12">
	                            <textarea name="message" placeholder="Mensaje"></textarea>
	                        </div>
	                        <input type="submit" value="ENVIAR" class="btn-submit">
	                    </div>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>

	<div class="google-maps">
	    <div id="map"></div>
	</div>

</div>

<?php get_footer(); ?>