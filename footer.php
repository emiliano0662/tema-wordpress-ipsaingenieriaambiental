<?php  get_post_field( 'post_name', get_post() ); ?>

<footer class="footer">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell small-12 medium-4 logo">
                <img src="<?php bloginfo('template_url' ); ?>/assets/img/logos/capa-1-copia.png" alt="">
            </div>
            <div class="cell small-12 medium-4 visit-us">
                <h4>Visitanos</h4>
                <img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/location-pointer.png" alt=""> <?=of_get_option('direccion');?>
            </div>
            <div class="cell small-12 medium-4 contact-info">
                <h4>Contáctanos</h4>
                <ul>
                    <li><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/mail.png" alt=""> <?=of_get_option('email-header-footer');?></li>
                    <li><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/phone-2.png" alt=""> <?=of_get_option('telefono-uno');?></li>
                    <li><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/mobile.png" alt=""> <?=of_get_option('telefono-dos');?></li>
                </ul>
            </div>
        </div>
        <div class="grid-x">
            <div class="cell footer-pages">
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="nosotros">Nosotros</a></li>
                    <li><a href="servicios">Servicios</a></li>
                    <li><a href="productos">Productos</a></li>
                    <li><a href="negocios">Negocios especiales</a></li>
                    <li><a href="contacto">Contáctenos</a></li>
                </ul>
            </div>
        </div>
        <div class="grid-x">
            <div class="cell footer-icons">
                <a href="<?=of_get_option('facebook');?>" target="_blank"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/facebook.png" alt=""></a>
                <a href="<?=of_get_option('instagram');?>" target="_blank"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/instagram.png" alt=""></a>
                <a href="<?=of_get_option('twitter');?>" target="_blank"><img src="<?php bloginfo('template_url' ); ?>/assets/img/icons/twitter.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>
<div class="suwwweb">
    <p>
        <span>Hecho por</span>
        <a href="https://suwwweb.com/" target="_blank">
            <img src="<?php bloginfo('template_url' ); ?>/assets/img/logos/logoblanco.png"
                 alt="SuWWWeb logo">
        </a>
        <span>- Páginas web</span>
    </p>
</div>


<script>
    var map;

    function initMap() {
        var element = document.getElementById('map');
        if (typeof (element) != 'undefined' && element != null) {
            // Create a map object and specify the DOM element for display.

            var cali = {lat: <?=of_get_option('google-maps-lat');?>, lng: <?=of_get_option('google-maps-lng');?>};
            var map = new google.maps.Map(document.getElementById('map'), {
                center: cali,
                zoom: 12,
                styles: [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e9e9e9"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 29
                    }, {
                        "weight": 0.2
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 18
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dedede"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "saturation": 36
                    }, {
                        "color": "#333333"
                    }, {
                        "lightness": 40
                    }]
                }, {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }, {
                        "lightness": 19
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 17
                    }, {
                        "weight": 1.2
                    }]
                }]
            });

            var marker = new google.maps.Marker({
                position: cali,
                map: map
            });
        }
    }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4wRU0etelm6rg1BTrN-3TPqhyTNEtn5k&callback=initMap">
</script>

<script src="<?php bloginfo('template_url' ); ?>/assets/js/app.js"></script>

<script type="text/javascript">
$(document).ready(function() {

    $("#contactoform").submit(function(event) {
        event.preventDefault();

        var nombre = $(".nombre").val();
        var email = $(".email").val();
        var validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var telefono = $(".telefono").val();
        var mensaje = $(".mensaje").val();

        if (nombre == "") {
            $(".nombre").focus();
            return false;
        }else if(telefono == ""){
            $(".telefono").focus();
            return false;
        }else if(email == "" || !validacion_email.test(email)){
            $(".email").focus();    
            return false;
        }else if(mensaje == ""){
            $(".mensaje").focus();
            return false;
        }else{

            var datos = $('#contactoform').serializeArray();

            $('.content-alert').hide();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php",
                data: datos,
                success: function() {

                    $("#contactoform").each(function(){ this.reset(); });

                    $('.content-alert-success').fadeIn();

                    setTimeout(function(){ $('.content-alert').hide(); }, 5000);
                },
                error: function() {

                    $('.content-alert-error').fadeIn();                 
                }
            });

            return false;
        }

    });

});
</script>

</body>
</html>