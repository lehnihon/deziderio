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
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="extra-links">
                            <a itemprop="url" href="<?php echo home_url( '/cadastro' ); ?>" title="">Cadastre-se&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/     <a itemprop="url" href="index4.html#" title="" class="popup1">Administração</a>
                        </div>
                    </div>
                </div>
            </div><!-- Top Sec -->
            <div class="logo-menu-sec">
                <div class="logo-menu">
                    <div class="logo">
                        <a itemprop="url" href="<?php echo home_url( '/' ); ?>" title=""><img itemprop="image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/logo-deziderio.png" alt="" /></a>
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
                                <a href="#" title="" itemprop="url" class="theme-btn popup2">Nosso APP!</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="menu-curve">
                    <ul>
                        <li class="menu-item-has-children"><a itemprop="url" href="<?php echo home_url( '/' ); ?>" title="">INÍCIO</a> 
                        </li>
                        <li class="menu-item-has-children"><a itemprop="url" href="<?php echo home_url( '/sobre-nos' ); ?>" title="">SOBRE NÓS</a> 
                        <ul>
                        	 <li><a itemprop="url" href="colaboradores.html" title="">Nossa Equipe</a></li>                      	
                        </ul> 
                        </li>
                        <li class="menu-item-has-children"><a itemprop="url" href="#servicos" title="">SERVIÇOS</a>
                            <ul>
                                <li><a itemprop="url" href="<?php echo home_url( '/fretamento-eventual-continuo' ); ?>" title="">Fretamento Eventual e Contínuo</a></li>
                                <li><a itemprop="url" href="<?php echo home_url( '/transporte-executivo' ); ?>" title="">Transporte Executivo</a></li>
                                <li><a itemprop="url" href="<?php echo home_url( '/transporte-aeroportos' ); ?>" title="">Transportes para Aeroportos</a></li>
                                   <li><a itemprop="url" href="<?php echo home_url( '/transporte-eventos-excursoes' ); ?>" title="">Transportes para Eventos e Excursões</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a itemprop="url" href="#itinerarios" title="">ITINERÁRIOS</a>
                            <ul>
                               
                                <li class="menu-item-has-children">
                                    <a itemprop="url"  title="">Todas as Linhas</a>
                                    <ul>
                                        <li><a itemprop="url" href="<?php echo home_url( '/alphaville1' ); ?>" title="">Alphaville 1</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/alphaville2' ); ?>" title="">Alphaville 2</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/alphaville3' ); ?>" title="">Alphaville 3</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/alphaville4' ); ?>" title="">Alphaville 4</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/barra-funda-sumare1' ); ?>" title="">Barra Funda / Sumaré 1</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/barra-funda-sumare2' ); ?>" title="">Barra Funda / Sumaré 2</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/berrini' ); ?>" title="">Berrini</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/berrini-dumas' ); ?>" title="">Berrini Dumas</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/berrini-interlagos' ); ?>" title="">Berrini Interlagos</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/centro-empresarial1' ); ?>" title="">Centro Empresarial 1</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/centro-empresarial2' ); ?>" title="">Centro Empresarial 2</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/centro-empresarial3' ); ?>" title="">Centro Empresarial 3</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/cidade-jardim' ); ?>" title="">Cidade Jardim</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/congonhas-moema' ); ?>" title="">Congonhas Moema</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/integracao' ); ?>" title="">Integração</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/interlagos1' ); ?>" title="">Interlagos 1</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/interlagos2' ); ?>" title="">Interlagos 2</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/shopping-morumbi' ); ?>" title="">Shopping Morumbi</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/sorocaba-jundiai' ); ?>" title="">Sorocaba Jundiaí</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/unip-shopping-morumbi' ); ?>" title="">UNIP / Shopping Morumbi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a itemprop="url"  title="">EXTRAS</a>
                            <ul>
                                <li><a itemprop="url" href="<?php echo home_url( '/informacoes' ); ?>" title="">Informações</a></li>
                                <li><a itemprop="url" href="<?php echo home_url( '/faq' ); ?>" title="">Faq</a></li>
                                <li> <a itemprop="url" href="<?php echo home_url( '/dicas' ); ?>" title="">Dicas</a>
                                </li>
                                <li><a itemprop="url" href="<?php echo home_url( '/fotos' ); ?>" title="">Fotos</a></li>
                             
                              </li>
                                
                            </ul>
                        </li>
                    
                        <li><a itemprop="url" href="<?php echo home_url( '/contato' ); ?>" title="">CONTATO</a></li>
                    </ul>
                </nav>
            </div><!-- Logo Menu Sec -->
        </header>
        <div class="responsive-header">
            <span class="top-sec-btn"><i class="fa fa-angle-double-down"></i></span>
            <div class="responsive-top-sec">
                <div class="responsive-top-bar top-bar">
                    <div class="container">
                        <span class="cargo-time">Atendimento: <i>08:00h - 17:00h</i></span>
                        <div class="connect-us">
                            <ul class="social-btn">
                                <li><a itemprop="url" href="https://www.facebook.com/Dezidério-Transporte-247391932384341/" target="_blank"   title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a itemprop="url" href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Responsive Top Bar -->
                <div class="responsive-quick-contact">
                    <div class="container">
                        <div class="quick-contact">
                            <ul>
                                <li>
                                    <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/phone.png" alt="" />
                                    <span>Tel:11 4807-3428</span>
                                    <p>Entre em contato</p>
                                </li>
                                <li>
                                    <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/sms.png" alt="" />
                                    <span><a href="assuex@terra.com.br"><span>assuex@terra.com.br</span>
                                    <p>Qual a sua dúvida?</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Responsive Quick Contact -->
            </div>
            <div class="responsive-nav">
                <div class="container">
                    <div class="responsive-logo">
                        <div class="logo">
                            <a itemprop="url" href="<?php echo home_url( '/' ); ?>" title=""><img itemprop="image" src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/logo-deziderio.png" alt="" /></a>
                        </div>
                    </div>
                    <span class="responsive-btn"><i class="fa fa-list"></i></span>
                    <div class="responsive-menu">
                        <span class="close-btn"><i class="fa fa-close"></i></span>
                        <ul class="responsive-popup-btns">
                            <li><i class="fa fa-user"></i><a itemprop="url" href="<?php echo home_url( '/cadastro' ); ?>." title="">Cadastre-se</a></li>
                            <li><i class="fa fa-paper-plane"></i><a itemprop="url" href="<?php echo home_url( '/area-cliente' ); ?>" title="" >Área do Cliente</a></li>
                        </ul>
                        <ul>
                            <li><a itemprop="url" href="<?php echo home_url( '/' ); ?>" title="">INÍCIO</a>
                            </li>
                             <li class="menu-item-has-children"><a itemprop="url" href="<?php echo home_url( '/sobre-nos' ); ?>" title="">SOBRE NÓS</a> 
                        <ul>
                             <li><a itemprop="url" href="<?php echo home_url( '/colaboradores' ); ?>" title="">Nossa Equipe</a></li>                         
                        </ul> 
                        </li>
                            <li class="menu-item-has-children"><a itemprop="url" href="#servicos" title="">SERVIÇOS</a>
                                <ul>
                                      <li><a itemprop="url" href="<?php echo home_url( '/fretamento-eventual-continuo' ); ?>" title="">Fretamento Eventual e Contínuo</a></li>
                                <li><a itemprop="url" href="<?php echo home_url( '/transporte-executivo' ); ?>" title="">Transporte Executivo</a></li>
                                <li><a itemprop="url" href="<?php echo home_url( '/transporte-aeroportos' ); ?>" title="">Transportes para Aeroportos</a></li>
                                   <li><a itemprop="url" href="<?php echo home_url( '/transporte-eventos-excursoes' ); ?>" title="">Transportes para Eventos e Excursões</a></li>
                                    
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a itemprop="url" href="#itinerarios" title="">ITINERÁRIOS</a>
                            <ul>
                               
                                <li class="menu-item-has-children">
                                    <a itemprop="url"  title="">Todas as Linhas</a>
                                    <ul>
                                        <li><a itemprop="url" href="<?php echo home_url( '/alphaville1' ); ?>" title="">Alphaville 1</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/alphaville2' ); ?>" title="">Alphaville 2</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/alphaville3' ); ?>" title="">Alphaville 3</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/alphaville4' ); ?>" title="">Alphaville 4</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/barra-funda-sumare1' ); ?>" title="">Barra Funda / Sumaré 1</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/barra-funda-sumare2' ); ?>" title="">Barra Funda / Sumaré 2</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/berrini' ); ?>" title="">Berrini</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/berrini-dumas' ); ?>" title="">Berrini Dumas</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/berrini-interlagos' ); ?>" title="">Berrini Interlagos</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/centro-empresarial1' ); ?>" title="">Centro Empresarial 1</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/centro-empresarial2' ); ?>" title="">Centro Empresarial 2</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/centro-empresarial3' ); ?>" title="">Centro Empresarial 3</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/cidade-jardim' ); ?>" title="">Cidade Jardim</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/congonhas-moema' ); ?>" title="">Congonhas Moema</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/integracao' ); ?>" title="">Integração</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/interlagos1' ); ?>" title="">Interlagos 1</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/interlagos2' ); ?>" title="">Interlagos 2</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/shopping-morumbi' ); ?>" title="">Shopping Morumbi</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/sorocaba-jundiai' ); ?>" title="">Sorocaba Jundiaí</a></li>
                                        <li><a itemprop="url" href="<?php echo home_url( '/unip-shopping-morumbi' ); ?>" title="">UNIP / Shopping Morumbi</a></li>
                                    </ul>
                                </li>
                            </ul>
                            </li>
                            <li class="menu-item-has-children"><a itemprop="url" href="" title="">EXTRAS</a>
                                 <ul>
                                <li><a itemprop="url" href="<?php echo home_url( '/informacoes' ); ?>" title="">Informações</a></li>
                                <li><a itemprop="url" href="<?php echo home_url( '/faq' ); ?>" title="">Faq</a></li>
                                <li> <a itemprop="url" href="<?php echo home_url( '/dicas' ); ?>" title="">Dicas</a>
                                </li>
                                <li><a itemprop="url" href="<?php echo home_url( '/fotos' ); ?>" title="">Fotos</a></li>
                             
                              </li>
                                
                            </ul>
                            </li>
                            <li><a itemprop="url" href="<?php echo home_url( '/contato' ); ?>" title="">CONTATO</a>
                                </ul>
                            </li>
                           
                        </ul>
                    </div><!-- Responsive Menu -->
                </div>
            </div>
        </div><!--Responsive header-->
       
        <!-- Modal Login Administração-->
        <div id="signup-popup">
            <div class="region2"  id="signup">
                <div class="modal-dialog1">
                    <div class="modal-content1">
                        <div class="modal-body1">
                            <div class="signup-form">
                                <button type="submit"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/close1.png" alt="" /></button>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="sign-in banner-detail1">
                                            <div class="heading2">
                                                <span>Realize seu</span>
                                                <h3>Login Aqui</h3>
                                            </div>
                                            <p>Para ter acesso a área administrativa do site, realize seu login.</p>
                                            <form>
                                                <label>
                                                    <input type="text" class="text-field" placeholder="Usuário">
                                                </label>
                                                <label>
                                                    <i class="fa fa-anchor"></i>
                                                    <input type="password" class="text-field" placeholder="Senha">
                                                </label>
                                                <div class="terms-services">
                                                    <span>
                                                        <input tabindex="23" type="checkbox" id="field15" />
                                                        <label for="field15">Relembrar Senha</label>
                                                    </span>
                                                </div>
                                                <ul>
                                                    <li><a href="#" title="" class="theme-btn" itemprop="url"><i class="fa fa-paper-plane"></i>ACESSAR AGORA</a></li>
                                                    <li><a href="#" title="" itemprop="url">Esqueci minha senha</a></li>
                                                </ul>
                                            </form>
                                        </div><!-- Sign In -->
                                    </div>
                                </div>
                            </div><!-- Signup Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Signup Popup -->
        
<!-- Popup APP-->
        <div id="calculate-form-popup">
            <div class="calculate-form-popup">
                <div class="modal-dialog2">
                    <div class="modal-content2">
                        <div class="modal-body2">
                            <button type="submit"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/close1.png" alt="" /></button>
                            <div class="cargo-shipment">
                                <div class="calculate-shipping">
                                    <div class="dark-title">
                                        <span><i class="fa fa-steam"></i>Conheça nosso</span>
                                        <h3>APLICATIVO</h3>
                                    </div>

                                    <div class="calculate-shipping-form">
                                        <form>
                                            <div class="row">
                                               
                                                <div class="col-md-6">
                                                    <div class="extra-services">
                                                        <h4><i class="fa fa-circle"></i>Área do Cliente</h4>
                                                        <h4><i class="fa fa-circle"></i>Acesso aos Boletos</h4>
                                                        <h4><i class="fa fa-circle"></i>Visualização dos Itinerários</h4>
                                                        <h4><i class="fa fa-circle"></i>Sobre a Empresa</h4>
                                                        <h4><i class="fa fa-circle"></i>Histórico de Pagamento</h4>
                                                        <h4><i class="fa fa-circle"></i>Configurações</h4>
                                                           <h4><i class="fa fa-circle"></i>Contatos</h4>
                                                       
                                                    </div>
                                                </div>


                                                <div class="col-md-5">
                                                    <a href="https://play.google.com/store/apps/details?id=br.com.wabiz.assuex&hl=en" title="" class="btns sml-btn thm-skin sml-radius"  target="_blank"><i class="fa fa-android"></i>Download para Android</a>
                                                </div>
                                                 <div class="col-md-5">
                                                    <a href="https://itunes.apple.com/br/app/assuex/id1234695157?mt=8" title="" class="btns sml-btn thm-skin sml-radius"  target="_blank"><i class="fa fa-apple"></i>Download &nbsp;para &nbsp;iPhone</a>
                                                </div>
                                                 <div class="col-md-3">
                                                   <a rel='nofollow' href='http://www.qrcode-generator.de' border='0' style='cursor:default'><img src='https://chart.googleapis.com/chart?cht=qr&chl=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dbr.com.wabiz.assuex%26hl%3Den&chs=120x120&choe=UTF-8&chld=L|2' alt=''></a>
                                                </div>
                                               
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- Calculate Shipping -->
                            </div><!-- Cargo Shipment -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
