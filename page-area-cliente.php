<?php get_header(); ?>
		
		<div class="page-top blackish overlape">
			<div class="parallax" data-velocity="-.1" style="background: url('images/parallax4.jpg') repeat scroll 0 0"></div>
			<div class="container">
				<div class="page-title">
					<span>Para Você que é passageiro</span>
					<h3>Área do Cliente</h3>
				</div><!-- Page Title -->
			</div>
		</div><!-- Page Top -->


		<section class="block grayish">
			<div class="fixed-bg" style="background: url('images/parallax8.jpg') no-repeat scroll 0 0 / cover !important;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="">
							<div class="row">
								<div class="col-md-8">
									<div class="get-quote-form2">
										<div class="title2 title4">
											<strong>Realize seu</strong>
											<h2>Login</h2>
										</div>
										<p>Para acessar seus boletos realize seu login. Lembre-se, é necessário realizar um cadastro para ter acesso, se ainda não tem <a href="<?php echo home_url( '/cadastro' ); ?>" title="" itemprop="url">cadastre-se aqui</a> ou entre em <a href="<?php echo home_url( '/contato' ); ?>" title="" itemprop="url">contato</a>  com nossa equipe.</p>
										<form>
											<div class="row">
											<div class="sign-in banner-detail1">
                                            <form>
                                                <label>
                                                    <input type="text" class="text-field" placeholder="Email">
                                                </label>
                                                <br><br><br>
                                                
                                                
                                                <label>
                                                    <i class="fa fa-key"></i>
                                                    <input type="password" class="text-field" placeholder="Senha">
                                                </label>
                                                <div class="terms-services">
                                                    <span>
                                                        <div class="icheckbox_futurico2"><input tabindex="23" type="checkbox" id="field15" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
                                                        <label for="field15" class="">Lembrar minha senha</label>
                                                        
                                                        
                                                    </span>
                                                     <ul>
                                                    <li><a href="index3.html#" title="" class="theme-btn" itemprop="url"><i class="fa fa-paper-plane"></i>ACESSAR</a></li>
                                                    <br>
                                                    <li><a href="index3.html#" title="" itemprop="url">Esqueceu sua senha?</a></li>
                                                </ul>
                                                </div>
                                              
                                            </form>
                                        </div>
												
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-4">
									<div class="region-contact-info team-detail-info">
										<div class="heading2">
											<span>Confira abaixo</span>
											<h3>Nossos Contatos</h3>
										</div>
										<p>Rua Oscar Salgado de Vasconcelos, 97 - Vila Hotolandia - SP - CEP: 13214-354</p>
										<div class="contact-detail">
											<span class="contact">
												<i class="fa fa-mobile"></i>
												<strong>Telefones</strong>
												<span>(11) 4807-3328</span>
												<span>(11) 99913-2884</span>
											</span>
											<span class="contact">
												<i class="fa fa-envelope"></i>
												<strong>Email</strong>
												<span>assuex@terra.com.br</span>
											</span>
											<span class="contact">
												<i class="fa fa-clock-o"></i>
												<strong>Horário de Atendimento</strong>
												<span>8:00h - 17:00h / Sábado e Domingo: Fechado</span>
											</span>
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
						<a href="get-quote.html#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-paper-plane"></i>BACK TO MAIN</a>
					</div><!-- Submission-data -->
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>