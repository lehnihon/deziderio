<?php get_header(); ?>
		
		<div class="page-top blackish overlape">
			<div class="parallax" data-velocity="-.1" style="background: url('images/parallax4.jpg') repeat scroll 0 0"></div>
			<div class="container">
				<div class="page-title">
					<span>Para contratar realize</span>
					<h3>seu cadastro</h3>
				</div><!-- Page Title -->
			</div>
		</div><!-- Page Top -->


		<section class="block grayish">
			<div class="fixed-bg" style="background: url('images/parallax6.jpg') no-repeat scroll;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="booking-page">
							<div class="row">
								<div class="col-md-12">
									<div class="person-img">
										
									</div>
								</div>
								<div class="col-md-12">
									<div class="booking">
										<div class="title2 title4">
											
											<h2>Não esqueça de preencher todos os campos!</h2>
										</div>
										<P>Para contratar nossos serviços, é necessário fazer um pré-cadastro logo abaixo, e nossa equipe retornará assim que possível, para finalizar seu cadastro.</P>

										<div class="booking-form">
											<form>
												<div class="row">
													<div class="col-md-6">
													
														<label><input type="text" class="text-field" placeholder="Nome ou Razão Social" /></label>
													</div>

													<div class="col-md-6">
														
														<label><input type="text" class="text-field" placeholder="RG ou Inscrição Estadual" /></label>
													</div>

													<div class="col-md-6">
														<label><input type="text" class="text-field" placeholder="CPF ou CNPJ" /></label>
													</div>

													<div class="col-md-6">
														<div class="datepicker-field">
															<input class="datepicker" id="datepicker" type="text" placeholder="Data de Nascimento" />
														</div>
													</div>

													<div class="col-md-6">
														<label><i class="fa fa-envelope"></i><input type="email" class="text-field" placeholder="Email" /></label>
													</div>

													<div class="col-md-6">
														<label><i class="fa fa-phone"></i><input type="text" class="text-field" placeholder="Telefone Fixo" /></label>
													</div>

												<div class="col-md-6">
														<label><i class="fa fa-phone"></i><input type="text" class="text-field" placeholder="Telefone Celular" /></label>
													</div>
													<div class="col-md-6">
														<label><input type="text" class="text-field" placeholder="Endereço Completo" /></label>
													</div>
													<div class="col-md-6">
														<label><input type="text" class="text-field" placeholder="Bairro" /></label>
													</div>
													<div class="col-md-6">
														<label><input type="text" class="text-field" placeholder="Cidade" /></label>
													</div>
													<div class="col-md-6">
														<label><input type="text" class="text-field" placeholder="CEP" /></label>
													</div>
													<div class="col-md-6">
														<label><input type="text" class="text-field" placeholder="Ponto de Embarque" /></label>
													</div>

													<div class="col-md-12">
														<textarea class="text-field" placeholder="Observações"></textarea>
													</div>

													<div class="col-md-12">
														<div class="terms-services">
															<span>
																<input tabindex="23" type="checkbox" id="field116" />
																<label for="field116">Li e concordo com as <a href="order-now.html#" title="">Normas da Empresa</a></label>
															</span>
														</div>
														<a title="" href="order-now.html#" data-toggle="modal" data-target="#submission-message" class="theme-btn"><i class="fa fa-paper-plane"></i>ENVIAR CADASTRO</a>
													</div>
												</div>
											</form>
										</div>
									</div><!-- Calculate Shipping -->
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
						<span><img src="images/resource/submission.png" alt="" /></span>
						<h1>SUBMISSION SUCCESSFUL</h1>
						<p>Thank You For Your Booking With Unload. We Have Sent you a Message Shortly.</p>
						<a href="order-now.html#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-paper-plane"></i>BACK TO MAIN</a>
					</div><!-- Submission-data -->
				</div>
			</div>
		</div>
	</div>
	

<script>
$(document).ready(function(){
	'use strict';

	$('#datepicker').datepick();
});
</script>
</body>
</html>