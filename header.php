<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body itemscope="">
<div class="theme-layout">
        <header class="fancy-header scrollup stick">
            <div class="top-sec">
                <div class="top-bar">
                    <div class="container">
                        <span class="cargo-time"><i class="fa fa-clock-o"></i>Atendimento de Seg à Sex das 08:00 - 17:00</span>
                        <div class="connect-us">
                            <ul class="social-btn">
                                <li><a itemprop="url" href="https://www.facebook.com/Assuex-Transporte-Executivo-1403225946597618/" title=""><i class="fa fa-facebook" target="_blank"></i></a></li>
                                <li><a itemprop="url" href="index.html#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a itemprop="url" href="index.html#" title=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="extra-links">
                            <a itemprop="url" href="cadastro.html" title="">Cadastre-se&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/     <a itemprop="url" href="index4.html#" title="" class="popup1">Administração</a>
                        </div>
                    </div>
                </div>
            </div><!-- Top Sec -->
            <div class="logo-menu-sec">
                <div class="logo-menu">
                    <div class="logo">
                        <a itemprop="url" href="index.html" title=""><img itemprop="image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/logo-deziderio.png" alt="" /></a>
                    </div>
                    <div class="quick-contact">
                        <ul>
                            <li>
                                <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/phone.png" alt="" />
                                <span>Tel:11 4807-3428 |</span>
                                 <span><a href="mailto:assuex@terra.com.br"><span>assuex@terra.com.br</span>
                                <p>Entre em contato</p>
                            </li>
                           
                            <li>
                                <a href="index.html#" title="" itemprop="url" class="theme-btn popup2">Nosso APP!</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="menu-curve">
                    <ul>
                        <li class="menu-item-has-children"><a itemprop="url" href="index.html" title="">INÍCIO</a> 
                        </li>
                        <li class="menu-item-has-children"><a itemprop="url" href="sobre-nos.html" title="">SOBRE NÓS</a> 
                        <ul>
                        	 <li><a itemprop="url" href="colaboradores.html" title="">Nossa Equipe</a></li>                      	
                        </ul> 
                        </li>
                        <li class="menu-item-has-children"><a itemprop="url" href="#servicos" title="">SERVIÇOS</a>
                            <ul>
                                <li><a itemprop="url" href="fretamento-eventual-continuo.html" title="">Fretamento Eventual e Contínuo</a></li>
                                <li><a itemprop="url" href="transporte-executivo.html" title="">Transporte Executivo</a></li>
                                <li><a itemprop="url" href="transporte-aeroportos.html" title="">Transportes para Aeroportos</a></li>
                                   <li><a itemprop="url" href="transporte-eventos-excursoes.html" title="">Transportes para Eventos e Excursões</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a itemprop="url" href="#itinerarios" title="">ITINERÁRIOS</a>
                            <ul>
                               
                                <li class="menu-item-has-children">
                                    <a itemprop="url"  title="">Todas as Linhas</a>
                                    <ul>
                                        <li><a itemprop="url" href="alphaville1.html" title="">Alphaville 1</a></li>
                                        <li><a itemprop="url" href="alphaville2.html" title="">Alphaville 2</a></li>
                                        <li><a itemprop="url" href="alphaville3.html" title="">Alphaville 3</a></li>
                                        <li><a itemprop="url" href="alphaville4.html" title="">Alphaville 4</a></li>
                                        <li><a itemprop="url" href="barra-funda-sumaré1.html" title="">Barra Funda / Sumaré 1</a></li>
                                        <li><a itemprop="url" href="barra-funda-sumaré2.html" title="">Barra Funda / Sumaré 2</a></li>
                                        <li><a itemprop="url" href="berrini.html" title="">Berrini</a></li>
                                        <li><a itemprop="url" href="berrini-dumas.html" title="">Berrini Dumas</a></li>
                                        <li><a itemprop="url" href="berrini-interlagos.html" title="">Berrini Interlagos</a></li>
                                        <li><a itemprop="url" href="centro-empresarial1.html" title="">Centro Empresarial 1</a></li>
                                        <li><a itemprop="url" href="centro-empresarial2.html" title="">Centro Empresarial 2</a></li>
                                        <li><a itemprop="url" href="centro-empresarial3.html" title="">Centro Empresarial 3</a></li>
                                        <li><a itemprop="url" href="cidade-jardim.html" title="">Cidade Jardim</a></li>
                                        <li><a itemprop="url" href="congonhas-moema.html" title="">Congonhas Moema</a></li>
                                        <li><a itemprop="url" href="integracao.html" title="">Integração</a></li>
                                        <li><a itemprop="url" href="interlagos1.html" title="">Interlagos 1</a></li>
                                        <li><a itemprop="url" href="interlagos2.html" title="">Interlagos 2</a></li>
                                        <li><a itemprop="url" href="shopping-morumbi.html" title="">Shopping Morumbi</a></li>
                                        <li><a itemprop="url" href="sorocaba-jundiai.html" title="">Sorocaba Jundiaí</a></li>
                                        <li><a itemprop="url" href="unip-shopping-morumbi.html" title="">UNIP / Shopping Morumbi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a itemprop="url"  title="">EXTRAS</a>
                            <ul>
                                <li><a itemprop="url" href="informacoes.html" title="">Informações</a></li>
                                <li><a itemprop="url" href="faq.html" title="">Faq</a></li>
                                <li> <a itemprop="url" href="dicas.html" title="">Dicas</a>
                                </li>
                                <li><a itemprop="url" href="fotos.html" title="">Fotos</a></li>
                             
                              </li>
                                
                            </ul>
                        </li>
                    
                        <li><a itemprop="url" href="contato.html" title="">CONTATO</a></li>
                    </ul>
                </nav>
            </div><!-- Logo Menu Sec -->
        </header>

