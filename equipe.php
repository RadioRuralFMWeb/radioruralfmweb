<?php include("./config.php"); ?>

<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->

<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->

<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt-br"> <!--<![endif]-->

<head>

<meta charset="utf-8">

<title><?php echo $page_title; ?> - Equipe</title>

<meta name="description" content="<?php echo $page_desc; ?>">

<!--// Mobile Metas //-->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--// Stylesheets //-->

<link rel="stylesheet" href="css/base.css" />

<link rel="stylesheet" href="css/skeleton.css" />

<link rel="stylesheet" href="css/layout.css" />

<link rel="stylesheet" href="css/style.css" />

<link rel="stylesheet" href="css/player.css" />

<link rel="stylesheet" href="css/color.css" />

<link rel="stylesheet" href="css/fancybox.css" />
<link rel="stylesheet" href="css/tabs.css" />


<!--[if lt IE 9]>

<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<!--// Favicons //-->

	<link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />

<!--// Javascript //-->

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.infinite-carousel.js"></script>

<script type="text/javascript" src="js/animatedcollapse.js"></script>

<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<script type="text/javascript" src="js/scrolltopcontrol.js"></script>

<script type="text/javascript" src="js/tabs.js"></script>

<script type="text/javascript" src="js/jquery.countdown.js"></script>

<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>

<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>

<script type="text/javascript" src="js/player.js"></script>

<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js"></script>

<script type="text/javascript" src="js/lightbox.js"></script>

<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>





</head>

<body>

<!-- Outer Wrapper Start -->

<div id="outer-wrapper">

	<div class="inner">

    	<!-- Header Start -->

    	<div id="header">

        	<span class="topbar">&nbsp;</span>

        	<!-- Container Start -->

            <div class="container">

            	<!-- Logo Start -->

            	<div class="five columns left">

                	<a href="home.php" class="logo"><img src="<?php echo $logo_url; ?>" width="159" height="auto" alt="<?php echo $page_title; ?>" /></a> 

                   &nbsp;  


              </div>

             

              <!-- Logo End -->

                

                               <!-- play start -->



                               

                               

                               <!-- play end -->

              <div class="eleven columns right">

                	

                <!-- Navigation Start -->

                <div class="navigation">

                    	

                  <div id="smoothmenu1" class="ddsmoothmenu">

                            <ul>

                                <li><a href="home.php">Home</a></li>

                                <li><a href="a-radio">A Rádio</a></li>

                                <li><a href="blog">Blog</a></li>

                                <li><a href="programacao">Programação</a></li>

                                <li class="current-menu-item"><a href="equipe">Equipe</a></li>

                                <li><a href="galeria">Galeria</a></li>

                                <li><a href="contato">Contato</a></li>

                            </ul>

                            <div class="clear"></div>

                        </div>

                    </div>

                    <!-- Navigation End -->

                    <div class="clear"></div>

                </div>

            </div>

          <!-- Container End -->

        </div>

        <!-- Header End -->
                <div class="clear"></div>
        <div class="inner shadow">
        	
            <div class="clear"></div>
           

        	<!-- Container Start -->
            <div class="container row">
            	<div class="sixteen columns left">
                	<h1 class="heading">Nossa Equipe</h1>
                    <!-- Static Page Start -->
                    <div class="in-sec nopad-bot">
                    	<div class="static">
                      <center>
                        <?php include_once($_SERVER["DOCUMENT_ROOT"]."/admin/data/blocks/paginas/equipe.html"); ?>
                        </center>
                        
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                    <!-- Static Page End -->
                </div>
            </div>
            <div class="clear"></div>
            
            
            <!-- Anuncientes Start -->



                    <center>

                	<div class="prod-sec">

                    	<div class="prod-head">

                        	<h1>Anunciantes</h1>

                           

                            <div class="clear"></div>

                        </div>

                        <ul class="prod-list">

                        	<li>

                            	<a href="<?php echo $anun_link_1; ?>" target="_blank" class="responsive"><img src="<?php echo $anun_banner_1; ?>" alt="" /><span>&nbsp;</span></a>

                                <h4 class="title"><?php echo $anun_nome_1; ?></a></h4>

                                	<a href="<?php echo $anun_link_1; ?>" target="_blank">Acessar o Site</a>

                                    



                          </li>

                           <li>

                            	<a href="<?php echo $anun_link_2; ?>" target="_blank" class="responsive"><img src="<?php echo $anun_banner_2; ?>" alt="" /><span>&nbsp;</span></a>

                                <h4 class="title"><?php echo $anun_nome_2; ?></a></h4>

                                	<a href="<?php echo $anun_link_2; ?>" target="_blank">Acessar o Site</a>

                                    



                          </li>

                           <li>

                            	<a href="<?php echo $anun_link_3; ?>" target="_blank" class="responsive"><img src="<?php echo $anun_banner_3; ?>" alt="" /><span>&nbsp;</span></a>

                                <h4 class="title"><?php echo $anun_nome_3; ?></a></h4>

                                	<a href="<?php echo $anun_link_3; ?>" target="_blank">Acessar o Site</a>

                                    



                          </li>

                           <li>

                            	<a href="<?php echo $anun_link_4; ?>" target="_blank" class="responsive"><img src="<?php echo $anun_banner_4; ?>" alt="" /><span>&nbsp;</span></a>

                                <h4 class="title"><?php echo $anun_nome_4; ?></a></h4>

                                	<a href="<?php echo $anun_link_4; ?>" target="_blank">Acessar o Site</a>

                                    



                          </li>

                        </ul>

                    </div>

                    </center>

                    <!-- Albums End -->
                    <div class="clear"></div>
            <!-- Footer Start -->

            <div id="footer">

            	<div class="foot-top">

                	<!-- Footer Logo Start -->

                    <div class="logo-foot">

                    	<a href="#"><img src="<?php echo $logo_url; ?>" alt="" width="82px" height="auto" /></a>

                    </div>

                    <!-- Footer Logo End -->

                    <!-- Footer Navigation Start -->

                    <div class="links-foot">

                    	<ul>

                        	<li><a href="home.php">Home</a></li>

                            <li><a href="a-radio">A Rádio</a></li>

                            <li><a href="blog">Blog</a></li>

                            <li><a href="programacao">Programação</a></li>

                            <li><a href="equipe">Equipe</a></li>

                            <li><a href="galeria">Galeria</a></li>

                            <li><a href="contato">Contato</a></li>

                        </ul>

                    </div>

                    <!-- Footer Navigation End -->



                </div>

                <div class="foot-bottom">

                	<!-- Copyrights Start -->

                    <div class="copyrights">

                    	<p>Copyright © <?php echo $page_title; ?> - Todos os Direitos Reservados.</p>

                    </div>

                    <!-- Copyrights End -->

                    <!-- Follow Us and Top Start -->

                    <div class="followus-top">

                    	<a href="#top" class="top">TOP</a>

                        <!-- Follow Us Start -->

                    	<ul>

                        	<li><h6 class="white">SIGA-NOS</h6></li>

                        	<li><a href="https://www.facebook.com/<?php echo $fb_url; ?>" target="_blank" class="facebook">&nbsp;</a></li>

                            <li><a href="https://www.twitter.com/<?php echo $tw_url; ?>" target="_blank" class="twitter">&nbsp;</a></li>
                      </ul>

                        <!-- Follow Us End -->

                    </div>

                    <!-- Follow Us and Top End -->

                </div>

            </div>

            <!-- Footer End -->

        </div>

        <div class="clear"></div>

    </div>

</div>

<!-- Outer Wrapper End -->



<script src="/<?php echo $pulse_dir; ?>/includes/tracker.php?uri=<?php echo $_SERVER['REQUEST_URI']; ?>&ref=<?php echo $_SERVER['HTTP_REFERER']; ?>"></script>

	

	<script type="text/javascript">

  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', '<?php echo $analytics_id; ?>']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();

</script>



</body>

</html>