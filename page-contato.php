<?php get_header(); ?>
        <div class="page-top blackish overlape">
            <div class="parallax" data-velocity="-.1" style="background: url('images/parallax4.jpg') repeat scroll 0 0"></div>
            <div class="container">
                <div class="page-title">
                    <span>Realize aqui seu</span>
                    <h3>Contato</h3>
                </div><!-- Page Title -->
            </div>
        </div><!-- Page Top -->

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 column">
                        <div class="map">
                            <div id="map-canvas"></div>
                        </div><!-- Google Map -->
                    </div>
                </div>
            </div>
        </section><!-- Google Map Section -->


        <section class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="region-contact-info team-detail-info">
                                        <div class="heading2">
                                            <span>Confira abaixo</span>
                                            <h3>NOSSOS CONTATOS</h3>
                                        </div>
                                        <p>Rua Oscar Salgado de Vasconcelos, 97 - Vila Hotolandia - SP - CEP: 13214-354</p>
                                        <div class="contact-detail">
                                            <span class="contact">
                                                <i class="fa fa-mobile"></i>
                                                <strong>TELEFONES</strong>
                                                <span>
(11) 4807-3328</span>
                                                <span>(11) 99913-2884</span>
                                            </span>
                                            <span class="contact">
                                                <i class="fa fa-envelope"></i>
                                                <strong>Email</strong>
                                                <span>assuex@terra.com.br</span>
                                            </span>
                                            <span class="contact">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>HORÁRIO DE ATENDIMENTO
</strong>
                                                <span>8:00h - 17:00h / Sábado e Domingo: Fechado</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="get-quote-form contact-info-form">
                                        <div class="heading2">
                                            <span>Para eventuais dúvidas?</span>
                                            <h3>ENTRE EM CONTATO</h3>
                                        </div>
                                        <p>Deixe sua mensagem, dúvida ou requisição e logo nossa equipe entrará em contato.</p>
                                        <div class="contactform">
                                            <div id="message"></div>
                                            <form id="contactform" method="post" action="contact.php.html">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="text" placeholder="Nome" class="text-field input-style" id="name" name="name" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="email" placeholder="Email" id="email" name="email" class="text-field input-style" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Título da Mensagem" name="subject" class="text-field input-style" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Mensagem" class="text-field input-style" id="comments" name="desc"></textarea>
                                                    </div>
                                                  
                                                    <div class="col-md-12">
                                                        <button id="quote-btn" title="" itemprop="url" type="submit" class="theme-btn"><i class="fa fa-paper-plane"></i>Enviar Mensagem</button>
                                                        <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/ajax-loader.gif" class="loader" alt="" />
                                                    </div>
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>	

<?php get_footer(); ?>

    <div class="modal fade" id="submission-message" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="submission-data">
                        <span><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/submission.png" alt="" /></span>
                        <h1>SUBMISSION SUCCESSFUL</h1>
                        <p>Thank You For Your Booking With Unload. We Have Sent you a Message Shortly.</p>
                        <a href="contact.html#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-paper-plane"></i>BACK TO MAIN</a>
                    </div><!-- Submission-data -->
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function () {
        "use strict";

            //** Map **//
            function initialize() {
                var myLatlng = new google.maps.LatLng(-23.1683468, -46.9097004);
                var mapOptions = {
                    zoom: 14,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    center: myLatlng
                }
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var image = 'images/icon.png';
                var myLatLng = new google.maps.LatLng(-23.1683468, -46.9097004);
                var beachMarker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image
                });

            }
            google.maps.event.addDomListener(window, 'load', initialize);

        });

    </script>
</body>
</html>