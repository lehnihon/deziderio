<?php get_header(); ?>
        <div class="page-top blackish overlape">
            <div class="parallax" data-velocity="-.1" style="background: url('images/parallax4.jpg') repeat scroll 0 0"></div>
            <div class="container">
                <div class="page-title">
                    <span>Separamos as principais</span>
                    <h3>Perguntas e repostas</h3>
                </div><!-- Page Title -->
            </div>
        </div><!-- Page Top -->

        <br>
           <br>
           <br>
            <br>
           <br>
           <br><br>
           <br>
           <br><br>
           <br>
           <br>
           <br>
       <br>
         <br>
          


        <section class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 column">
                        <div class="toggels-page">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="toggle toggle-style4" id="toggle4">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="toggle toggle-style4 toggle-style5" id="toggle5">
                                        <div class="toggle-item activate">
                                            <h3 class="active"><i class="fa fa-money"></i>Como realizo o pagamento da mensalidade?</h3>
                                            <div class="content">
                                                <div class="simple-text">
                                                    <p>Sempre trabalhando em melhorias, a Viação Cometa possui uma frota moderna que acompanha as mudanças constantes na tecnologia. Buscando oferecer aos seus clientes e parceiros segurança e conforto, Com uma infraestrutura completa, a Cometa possui garagens e oficinas próprias com os equipamentos necessários para garantir a qualidade dos seus serviços.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toggle-item">
                                            <h3 class=""><i class="fa fa-smile-o"></i> Ao sair de férias qual procedimento que devo fazer?</h3>
                                            <div class="content">
                                                <div class="simple-text">
                                                    <p>Sempre trabalhando em melhorias, a Viação Cometa possui uma frota moderna que acompanha as mudanças constantes na tecnologia. Buscando oferecer aos seus clientes e parceiros segurança e conforto, Com uma infraestrutura completa, a Cometa possui garagens e oficinas próprias com os equipamentos necessários para garantir a qualidade dos seus serviços.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toggle-item">
                                            <h3 class=""><i class="fa fa-question-circle"></i>Posso mudar de linha durante a contratação?</h3>
                                            <div class="content">
                                                <div class="simple-text">
                                                    <p>Sempre trabalhando em melhorias, a Viação Cometa possui uma frota moderna que acompanha as mudanças constantes na tecnologia. Buscando oferecer aos seus clientes e parceiros segurança e conforto, Com uma infraestrutura completa, a Cometa possui garagens e oficinas próprias com os equipamentos necessários para garantir a qualidade dos seus serviços.</p>
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
                        <a href="toggles.html#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-paper-plane"></i>BACK TO MAIN</a>
                    </div><!-- Submission-data -->
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            'use strict';

            // Accordion //
            $('#toggle2 .content').hide();
            $('#toggle2 h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#toggle2 h3').on("click", function () {
                if ($(this).next().is(':hidden')) {
                    $('#toggle2 h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                    $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                    return false;
                }
            });

            // Accordion //
            $('#toggle3 .content').hide();
            $('#toggle3 h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#toggle3 h3').on("click", function () {
                if ($(this).next().is(':hidden')) {
                    $('#toggle3 h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                    $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                    return false;
                }
            });

            // Accordion //
            $('#toggle4 .content').hide();
            $('#toggle4 h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#toggle4 h3').on("click", function () {
                if ($(this).next().is(':hidden')) {
                    $('#toggle4 h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                    $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                    return false;
                }
            });

            // Accordion //
            $('#toggle5 .content').hide();
            $('#toggle5 h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#toggle5 h3').on("click", function () {
                if ($(this).next().is(':hidden')) {
                    $('#toggle5 h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                    $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                    return false;
                }
            });

            // Accordion //
            $('#toggle6 .content').hide();
            $('#toggle6 h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#toggle6 h3').on("click", function () {
                if ($(this).next().is(':hidden')) {
                    $('#toggle6 h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                    $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                    return false;
                }
            });

            // Accordion //
            $('#toggle7 .content').hide();
            $('#toggle7 h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#toggle7 h3').on("click", function () {
                if ($(this).next().is(':hidden')) {
                    $('#toggle7 h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                    $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                    return false;
                }
            });

            // Accordion //
            $('#toggle8 .content').hide();
            $('#toggle8 h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#toggle8 h3').on("click", function () {
                if ($(this).next().is(':hidden')) {
                    $('#toggle8 h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                    $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                    return false;
                }
            });

            // Accordion //
            $('#toggle9 .content').hide();
            $('#toggle9 h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
            $('#toggle9 h3').on("click", function () {
                if ($(this).next().is(':hidden')) {
                    $('#toggle9 h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                    $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                    return false;
                }
            });
        });
    </script>
</body>
</html>