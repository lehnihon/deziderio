<?php get_header(); ?>
		
		<div class="page-top blackish overlape">
			<div class="parallax" data-velocity="-.1" style="background: url('images/parallax30.jpg') repeat scroll 0 0"></div>
			<div class="container">
				<div class="page-title">
					<span>CONHEÇA O SERVIÇO DE</span>
					<h3>TRNSPORTE EXECUTIVO</h3>
				</div><!-- Page Title -->
			</div>
		</div><!-- Page Top -->


		<section class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="">
							<div class="row">
								<div class="col-md-4">
									<div class="services-menu">
										<div class="heading2">
											<span>Acesse também</span>
											<h2>OUTROS SERVIÇOS</h2>
										</div>
										<ul>
											<li><a href="fretamento-eventual-continuo.html" title="" itemprop="url">Fretamento Eventual e Contínuo</a></li>
											<li><a href="transporte-aeroportos.html" title="" itemprop="url">Transporte para Aeroportos</a></li>
											<li><a href="transporte-eventos-excursoes.html" title="" itemprop="url">Transporte para Eventos e Excursões</a></li>
										
										</ul>
									</div>
								</div>
								<div class="col-md-8">
									<div class="services-details">
										<div class="service-detail-post">
											<div class="services-thumb">
												<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/img-transporte-executivo.jpg" alt="" itemprop="url" />
											</div>
											<div class="services-info">
												<h2 itemprop="name">Saiba mais sobre este serviço</h2>
												<span>Atualizado em 18/10/2017</span>
											</div>
										</div>
									</div><!-- Services Details -->
									<div id="services-detail-tabs">
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="services-detail.html#description" aria-controls="description" role="tab" data-toggle="tab">Descrição do Serviço</a></li>
											
											<li role="presentation"><a href="services-detail.html#chart" aria-controls="chart" role="tab" data-toggle="tab">Contratar</a></li>
										</ul>
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane fade in active" id="description">
												<div class="services-tabs-content">
													<p itemprop="description">O transporte executivo vem crescendo em todo mundo, sabendo disto, a <b>DEZIDÉRIO TRANSPORTE</b> separou especialmente este serviço voltado para atender nossos clientes executivos, pois, disponibilzamos veículos diferenciados de alto nível, com profissionais qualificados e experientes. <br><br>Sem dúvida manter a qualidade neste serviço em específico é a uma das prioridades da Dezidério, pois além do crescimento é fundamental que este público veja o diferencial que nossa empresa oferece, um público que cresce memos em meio a crise 7% ao ano segundo o IBGE. Em resumo o transporte executivo é a nossa apostam compromisso e desafio!</p>
													
												</div>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="chart">
												<div class="services-tabs-content">
													<p itemprop="description">Para contratar o serviço de Transporte Executivo da Dezidério Transportes é simples. Envie-nos uma mensagem e nossa equipe logo retornará o contato.</p>
													<div class="chart-detail">
														<div class="row">
															<div class="col-md-6">
																<div class="chart-rating">
																	<div id="rating-chart" data-startdegree="60" data-dimension="250" data-text="39%" data-info="De procura no site" data-width="7" data-fontsize="30" data-percent="39" data-fgcolor="#f5b120" data-bgcolor="#ededed"></div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="address-book">
																	<ul>
																	<h2>Contatos</h2>
																		<li><span>Telefone:</span> 11 4807-3428</li>
																		<li><span>Email:</span> assuex@terra.com.br</li>
																		<li><span>Endereço:</span> Rua Oscar Salgado de Vasconcelos, 97 - Vila Hotolandia - SP - CEP: 13214-354</li>
																	</ul>
																	<a class="theme-btn" href="cadastro.html" itemprop="url" title=""><i class="fa fa-paper-plane"></i>CONTRATAR</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- Services Detail Tabs -->
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
						<a href="services-detail.html#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-paper-plane"></i>BACK TO MAIN</a>
					</div><!-- Submission-data -->
				</div>
			</div>
		</div>
	</div>
	
<script>
$(document).ready(function() {
	"use strict";

	//** Rating Chart **//
	$('#rating-chart').circliful();		

});
</script>
</body>
</html>