<?php
require_once 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-BR">
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br" dir="ltr"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="pt-br" dir="ltr"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang="pt-br" dir="ltr"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br" dir="ltr"> <!--<![endif]-->
        <head>
            <meta charset="utf-8" />
            <title><?php echo $system_name; ?> - IFSULDEMINAS</title>
            <!-- <base href="" /> -->
            <meta name="keywords" content="" />
            <meta name="author" content="Joomla Calango - Joomla User Group Oficial" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="description" content="" />
            <meta name="generator" content="Joomla! - Open Source Content Management" />
            <!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
            <!--<link href="img/favicon_if.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />-->
            <link rel="icon" href="<?php echo base_url(); ?>assets/padrao/img/icon.ico" type="image/x-icon">
            <link rel="stylesheet" href="<?php echo base_url(); ?>assets/padrao/bootstrap/css/bootstrap.min.css" type='text/css'/>
            <link rel="stylesheet" href="<?php echo base_url(); ?>assets/padrao/css/template-verde.css" type='text/css'/>		
            <link rel="stylesheet" href="<?php echo base_url(); ?>assets/padrao/font-awesome/css/font-awesome.min.css" type='text/css'/>

            <!--[if lt IE 10]><link rel="stylesheet" href="css/ie.css" /><![endif]-->
            <!--[if lt IE 9]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
            <!--[if lt IE 8]><link rel="stylesheet" href="css/ie7.css" /><link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css" /><![endif]-->
            <!-- chamada de fontes local --><!-- <link rel="stylesheet" href="css/fontes.css" type='text/css'/>		 -->
           <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">	



            <!-- InstanceEndEditable -->
            <script type="text/javascript" charset="iso-8959-1" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
            <script type="text/javascript" charset="iso-8959-1" src="<?php echo base_url(); ?>assets/js/jquery.mask.js"></script>
            <script type="text/javascript">$("#telResidencial").mask("(00) 0000-0009");</script>
            <script type="text/javascript">$("#telCelular").mask("(00) 0000-00009");</script>

            <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/calendario.css" />
            <script src="<?php echo base_url(); ?>assets/js/calendario.js"></script>    

            <script type="text/javascript" charset="iso-8959-1" src="<?php echo base_url(); ?>assets/padrao/js/inscricao_concurso.js"></script>


        </head>
        <body id="barra">
            <a class="hide" id="topo" href="#accessibility">Ir direto para menu de acessibilidade.</a>
            <noscript>
                <div class="error minor-font">
                    Seu navegador de internet está sem suporte à JavaScript. Por esse motivo algumas funcionalidades do site podem não estar acessíveis.
                </div>
            </noscript>
            <!--[if lt IE 7]><center><strong>Atenção, a versão de seu navegador não é compatível com este sítio. Atualize seu navegador.</strong></center><![endif]-->
            <!-- barra do governo -->
            <div class="barra-brasil">
                <div id="wrapper-barra-brasil"><div class="brasil-flag"><div class="link-barra">Brasil</div></div><span class="acesso-info"><div class="link-barra" id="barra-brasil-orgao"></div></span><nav>
                        </nav><div ></div></div>	
	
            </div>
            <!-- fim barra do governo -->
            <div class="layout">
                <header>
                    <div class="container"> 
                        <div class="row-fluid accessibility-language-actions-container">    			   			
                            <div class="span6 accessibility-container">
                                <ul id="accessibility">

                                </ul>						
                            </div>
                            <!-- fim div.span6 -->
                            <div class="span6 language-and-actions-container">

                                <ul id="portal-siteactions" class="pull-right">

                                    <li>
                                        <a accesskey="6" href="#" class="toggle-contraste">Alto Contraste</a>
                                    </li>

                                </ul>
                            </div>
                            <!-- fim div.span6 -->    
                        </div>
                        <!-- fim .row-fluid -->
                        <div class="row-fluid">
                            <div id="logo" class="area_logo small">
                                <!-- <div id="logo" class="span8 big"> <div id="logo" class="span8 small"> -->
                                <a class="span8 small " href="<?php echo base_url(); ?>" title="<?php echo $system_name; ?>">							
                                    <p class="portal-title-1">Instituto Federal</p>
                                    <p class="portal-title" >Sul de Minas Gerais</p>
                                    <p class="portal-description">Ministério da Educação</p>
                                </a>
                            </div>
                            <!-- fim .span8 -->

                            <div class="espaco">					

                                <!-- fim div#social-icons.row -->
                            </div>
                            <!-- fim .span4 -->
                        </div>
                        <!-- fim .row-fluid -->
                    </div>
                    <!-- fim div.container -->
                    
                    <div class="<?php echo $sobre; ?>">
                        <div class="container">
                            <nav class="menu-servicos pull-left ">
                                <h2 class="hide">Serviços</h2>
                                <ul>
<!--                                    <li class="portalservicos-item">-->
                                        <p class="texto_titulo"><?php echo $system_name; ?></p>
                                    <!--</li>-->

                                </ul>
                                <span class="hide">Fim do menu de serviços</span>
                            </nav>
                            <!-- fim #menu-servicos.pull-right -->
                        </div>
                        <!-- .container -->
                    </div>
                    <!-- fim .sobre -->			
                </header>
                <section>
                    <div id="centro"  class="span10 ">&nbsp;</div>
                    <div id="centro"  class="span10 ">
                        <?php echo $breadcrumb; ?>


                    </div>
                </section>
                <main> 
                     <div class="conteudo_principal" style="margin-top: 50px; margin-bottom: 0px;">


                        <?php echo $contents; ?>

                    </div>

                    <!-- fim .container -->
                </main>
                
                <footer >

                    <div class="container container-menus">
                        <div id="footer" class="row footer-menus">
                            <span class="hide">Início da navegação de rodapé</span>


                            <div class="desenvolvido_por">Instituto Federal de Educação, Ciência e Tecnologia do Sul de Minas Gerais. <br>
                                    DTIC - Diretoria de Tecnologia da Informação e Comunicações - Reitoria - <?php echo $ano_desenvolvimento.' - '. date('Y'); ?>. <br></div>
                   

                            <span class="hide">Fim da navegação de rodapé</span>					
                        </div>
                        <!-- fim .row -->
                    </div>
                    <!-- fim .container -->
                    <div class="footer-logos">
                        <div class="container">
                            <a href="http://www.acessoainformacao.gov.br/" class="logo-acesso pull-left"><img src="<?php echo base_url(); ?>assets/padrao/images/acesso-a-informacao.png" alt="Acesso a Informação"></a>
                            <!-- separador para fins de acessibilidade --><span class="hide">&nbsp;</span><!-- fim separador para fins de acessibilidade -->
                            <a href="http://www.brasil.gov.br/" class="brasil pull-right"><img src="<?php echo base_url(); ?>assets/padrao/images/brasil.png" alt="Brasil - Governo Federal"></a>
                        </div>				
                    </div>

                    <div class="footer-atalhos visible-phone">
                        <div class="container">
                            <span class="hide">Fim do conteúdo da página</span>
                            <div class="pull-right voltar-ao-topo"><a href="#portal-siteactions"><i class="icon-chevron-up"></i>&nbsp;Voltar para o topo</a></div>
                        </div>
                    </div>
                    
                    
                </footer>	
            </div>
            
            <!-- fim div#wrapper -->	
            <!-- scripts principais -->	
            <script src="<?php echo base_url(); ?>assets/padrao/js/jquery.min.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
            <script src="<?php echo base_url(); ?>assets/padrao/js/jquery-noconflict.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
            <script src="<?php echo base_url(); ?>assets/padrao/bootstrap/js/bootstrap.min.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
            <script src="<?php echo base_url(); ?>assets/padrao/js/jquery.cookie.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
            <script src="<?php echo base_url(); ?>assets/padrao/js/template.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
            <script src="<?php echo base_url(); ?>assets/padrao/jplayer/js/jquery.jplayer.min.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
            <script type="text/javascript">
                //<![CDATA[
                jQuery(document).ready(function () {
                    urls = {mp3: "http://tv1-lnx-04.grupotv1.com/portalmodelo/conteudos-de-marcacao/audio-1-titulo-do-audio-1/audio-1-nome-do-audio.mp3"};
                    playAudio("#jquery_jplayer_1", urls, "mp3", "jplayer/");
                });
                //]]>
            </script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
            <!-- Script do portal Brasil deve ficar preferencialmente no rodape para nao atrasar o carregamento da pagina principal -->
            <!--<script src="http://barra.brasil.gov.br/barra.js?cor=verde" type="text/javascript"></script><noscript>&nbsp; item para fins de acessibilidade </noscript>-->

           <noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>     </body>
    </html>