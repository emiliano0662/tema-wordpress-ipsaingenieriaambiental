<div class="grid-container">
    <div class="grid-x">
        <div class="medium-2 small-3 cell logo">
            <a href="/">
                <img src="<?php bloginfo('template_url' ); ?>/assets/img/logos/capa-1.png" alt="">
            </a>
        </div>
        <div class="medium-10 small-9 cell bars">
            <div class="social-n-contact">
                <div class="f-contact">
                    <p><?=of_get_option('email-header-footer');?></p>
                    <p><?=of_get_option('telefono-uno');?></p>
                    <p><?=of_get_option('telefono-dos');?></p>
                </div>
                <div class="social">
                    <a href="<?=of_get_option('facebook');?>" target="_blank">
                        <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/icon-facebook.png" alt="Facebook">
                    </a>
                    <a href="<?=of_get_option('instagram');?>" target="_blank">
                        <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/icon-instagram.png" alt="Facebook">
                    </a>
                    <a href="<?=of_get_option('twitter');?>" target="_blank">
                        <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/icon-twitter.png" alt="Facebook">
                    </a>
                    <a href="<?=of_get_option('googleplus');?>" target="_blank">
                        <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/icon-google-plus.png" alt="Facebook">
                    </a>
                </div>
            </div>
            <div class="menu-zone show-for-large">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li>
                        <a href="/" class="nav-home">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="nosotros" class="nav-about">
                            Quienes Somos
                        </a>
                    </li>
                    <li>
                        <a href="servicios" class="nav-services">
                            Servicios
                        </a>
                        <ul class="menu dropdown-menu-links">
                            <li><a href='servicios#tratamiento'>Tratamiento y aprovechamiento de solventes</a></li>
                            <li><a href='servicios#destruccion'>Destrucción de residuos especiales</a></li>
                            <li><a href='servicios#valorizacion'>Valorización de excedentes industriales</a></li>
                            <li><a href='servicios#gestion'>Gestión de residuos peligrosos</a></li>
                            <li><a href='servicios#certificaciones'>Certificaciones</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="productos" class="nav-products">
                            Productos
                        </a>
                    </li>
                    <li>
                        <a href="negocios" class="nav-business">
                            Negocios Especiales
                        </a>
                    </li>
                    <li>
                        <a href="contacto" class="nav-contact">
                            Contáctenos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="small-12 cell hide-for-large">
            <div class="menu-zone small">
                <div class="show-small-menu">
                    <a href="javascript:void(0);"
                       class="show-menu"
                    >
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        Menú
                    </a>
                </div>
                <ul class="menu vertical drilldown"
                    data-drilldown
                    data-back-button='<li class="js-drilldown-back"><a tabindex="0">Volver</a></li>'>
                    <li>
                        <a href="index" class="nav-home">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="nosotros" class="nav-about">
                            Quienes Somos
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Servicios</a>
                        <ul class="menu vertical nested">
                            <li><a href='servicios#tratamiento'>Tratamiento y aprovechamiento de solventes</a></li>
                            <li><a href='servicios#destruccion'>Destrucción de residuos especiales</a></li>
                            <li><a href='servicios#valorizacion'>Valorización de excedentes industriales</a></li>
                            <li><a href='servicios#gestion'>Gestión de residuos peligrosos</a></li>
                            <li><a href='servicios#certificaciones'>Certificaciones</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="productos" class="nav-products">
                            Productos
                        </a>
                    </li>
                    <li>
                        <a href="negocios" class="nav-business">
                            Negocios Especiales
                        </a>
                    </li>
                    <li>
                        <a href="contacto" class="nav-contact">
                            Contáctenos
                        </a>
                    </li>
                </ul>
            </div>
        </div>                
    </div>
</div>