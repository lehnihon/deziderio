<?php
get_header();
wp_reset_query();
$coordenador = get_post_meta($post->ID, 'coordenador', true);
$telefone = get_post_meta($post->ID, 'telefone', true);
$embarque = get_post_meta($post->ID, 'embarque', true);
$onibus = get_post_meta($post->ID, 'onibus', true);
$iframe = get_post_meta($post->ID, 'iframe', true);

$horariop = get_post_meta($post->ID, 'horariop', true);
$destinop = get_post_meta($post->ID, 'destinop', true);
$horarior = get_post_meta($post->ID, 'horarior', true);
$destinor = get_post_meta($post->ID, 'destinor', true);
?>
		
		<div class="page-top blackish overlape">
			<div class="parallax" data-velocity="-.1" style="background: url('images/parallax2.jpg') repeat scroll 0 0"></div>
			<div class="container">
				<div class="page-title">
					<span>LINHA</span>
					<h3><?php the_title(); ?></h3>
				</div><!-- Page Title -->
			</div>
		</div><!-- Page Top -->	
 		
		<section class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-margin blog-detail-main">
							<div class="row">
								<div class="col-md-12">
									<div class="news-box blog-detail">
										<div class="news-thumb">
                      <?php echo $iframe; ?>
											
											
										</div>
										
										<div class="news-detail">
										 <div class="share-it">
													
													
													<a href="book-now.html" itemprop="url" class="theme-btn" title=""><i class="fa fa-download"></i>DOWNLOAD PDF</a>
													
												</div>
											<h1 itemprop="headline">Tabela Horários e Rotas</h1>
                                            <div class="cat-list">
                                            
                                              
                                                <span><i class="fa fa-random"></i></span>
                                                <ul>
                                                    <li><a href="index.html#itinerarios" title="">Itinerários</a></li>
                                                    <li><a href="alphaville1.html" title="">Linha:<?php the_title(); ?></a></li>
                                                   
                                                </ul>
                                            </div>
											<div class="detail-info">
												<ul class="post-meta2">
													
													<li><i class="fa fa-user"></i><b>Coordenador:</b> <a  itemprop="url" title="" href="<?php echo home_url( '/colaboradores' ); ?>"><?php echo $coordenador; ?></a></li>
													<li><i class="fa fa-phone"></i><a itemprop="url" title=""><b>Tel/WhatsApp:</b> <?php echo $telefone; ?></a></li>
													<li><i class="fa fa-hand-o-right"></i><a itemprop="url" title="" ><b>Embarque:</b> <?php echo $embarque; ?></a></li>
													<li><i class="fa fa-street-view"></i><a itemprop="url" title="" ><b>Destino:</b> <?php the_title(); ?></a></li>
													<li><i class="fa fa-bus"></i><a itemprop="url" title="" ><b>Ônibus:</b> <?php echo $onibus; ?></a></li>
													
													
												</ul>
												
											</div>
										

                                            <p itemprop="description"><table class="table table-bordered">
                                            <div class="table-responsive">
                                            
                                            <table class="table table-striped table-bordered table-responsive text-left my-orders-table">
                                                <thead>
                                                    <tr class="bg-info">
                                                        <th>PARTIDA</th>
                                                        <th>RETORNO</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $continua = true;
                                                    $i = 0;
                                                    while($continua){
                                                      $continua = false;
                                                    ?>
                                                      <tr>
                                                          <td><?php if(!empty($horariop[$i])){ ?><b><?php echo $horariop[$i]; ?></b><?php $continua = true; } ?>
                                                          <br><?php if(!empty($destinop[$i])){ echo $destinop[$i]; $continua = true; } ?></td>
                                                          
                                                          <td><?php if(!empty($horarior[$i])){ ?><b><?php echo $horarior[$i]; ?></b><?php $continua = true; } ?>
                                                          <br><?php if(!empty($destinor[$i])){ echo $destinor[$i]; $continua = true; } ?></td>
                                                      </tr>
                                                   <?php 
                                                   $i++;
                                                   }
                                                   ?>
                                                </tbody>
                                            </table>
                                        </div>
                                       
      
                                        <div class="tags-div">
                                            <strong>Outras Linhas:</strong>
                                            <div class="cargo-tags">
                                                <?php 
                                                $args = array('posts_per_page' => 6,'orderby' => 'rand','order' => 'ASC','post_type' => 'itinerario');
                                                $query = new WP_Query( $args ); 
                                                ?>
                                                <?php if ( $query->have_posts() ) : ?>
                                                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                       <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
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
						<span><img src="images/resource/submission.png" alt="" /></span>
						<h1>SUBMISSION SUCCESSFUL</h1>
						<p>Thank You For Your Booking With Unload. We Have Sent you a Message Shortly.</p>
						<a href="blog-detail-no-sidebar.html#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-paper-plane"></i>BACK TO MAIN</a>
					</div><!-- Submission-data -->
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>