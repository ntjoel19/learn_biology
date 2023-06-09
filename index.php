<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;" />
	<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css'/>
	<link rel='stylesheet' type='text/css' href='bootstrap/css/style.css'/>
	<link rel='stylesheet' type='text/css' href='bootstrap/css/font-awesome.min.css'/>
	<link rel="stylesheet" type="text/css" href='bootstrap/css/juizDropDownMenu.css'/>
	<link rel="stylesheet" type="text/css" href='bootstrap/css/style-main-left-menu.css'/>
    <title>Bienvenu sur LaboG�n�tique</title>
    
    <style type="text/css">
     /* Style pour l'exemple*/
     audio{
     	display:none;
     }
      option-menu.col-md-7 {
      	line-height : 400px;
      }
      #menu-top,#footer{
      	line-height : 100px;
      	border-radius : 5px;
      	background: #dbdbdb url(ressources/main.png) repeat-x scroll 0 0;  
		background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #d4d4d4),color-stop(1, #e6e6e6));
		background: -webkit-linear-gradient(center bottom , #d4d4d4 0%, #e6e6e6 100%) repeat scroll 0 0 #dbdbdb;  
		background: -moz-linear-gradient(center bottom , #d4d4d4 0%, #e6e6e6 100%) repeat scroll 0 0 #dbdbdb;
		margin-top:10px;
		border: 1px solid #c0c0c0;
      }
      #footer{
      	line-height : 50px;
      	border-radius : 5px;
      	background: #dbdbdb url(ressources/main.png) repeat-x scroll 0 0;  
		background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #d4d4d4),color-stop(1, #e6e6e6));
		background: -webkit-linear-gradient(center bottom , #d4d4d4 0%, #e6e6e6 100%) repeat scroll 0 0 #dbdbdb;  
		background: -moz-linear-gradient(center bottom , #d4d4d4 0%, #e6e6e6 100%) repeat scroll 0 0 #dbdbdb;  
		border: 1px solid #c0c0c0;
      }
      .btn-home{
		  box-shadow: 8px 8px 12px #aaa;
		  border-radius : 1000px;
		  transition:background 1000ms,color 1000ms,border-color 500ms;
      }
      div.bg-primary{
		  border-radius : 0px 0px 5px 5px;
		  background : #3276b1;
		  color:white;
      }
      .btn-home:hover{
		  background: #497d94;
      }
      .option_lecon{
      	background : #fff;
      }
      .individu{
      	
      }
      .individu img:hover{
      	border-radius:5px;
      	cursor:pointer;
		border: 2px ridge #999;
      }
      span[style='display:block;']{
      	background: #dbdbdb url(ressources/main.png) repeat-x scroll 0 0;  
		background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #d4d4d4),color-stop(1, #e6e6e6));
		background: -webkit-linear-gradient(center bottom , #d4d4d4 0%, #e6e6e6 100%) repeat scroll 0 0 #dbdbdb;  
		background: -moz-linear-gradient(center bottom , #d4d4d4 0%, #e6e6e6 100%) repeat scroll 0 0 #dbdbdb;
      }
	  .quizz-lecon1 div{
		text-align : left;  
	  }
    </style>

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<!--script type="text/javascript" src="engine0/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section --></head>
<body>
	<section id='entete'>
    	<div class="container">
			<div id="menu-top-banner" class="row">
				<div class="col-md-12">
					<img src="bootstrap/img/logo.png" />
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-offset-12">
					
				</div>
			</div>
			
			<div id="menu-top" class="row">
				<div class='col-md-12 col-xs-12'>
					<b>Bienvenue dans le laboratoire</b>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-12"></div>
		</div>	
    </section>
	<div class="container">
		<div class="row">
		    <div class="col-sm-5 col-md-3 col-lg-3 affix-sidebar">
				<div class="sidebar-nav">
				  <div class="navbar navbar-default" role="navigation">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
					      <span class="sr-only">Toggle navigation</span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
				      </button>
				      <span class="visible-xs navbar-brand">Sidebar menu</span>
				    </div>
				    <div class="navbar-collapse collapse sidebar-navbar-collapse">
				      <ul class="nav navbar-nav" id="sidenav01">
				        <li class="active">
				          <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
					          <h4>
					          		Choisissez de la le�on
					          </h4>
				          </a>
				        </li>
				        <li>
				            <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed" id='lecon1'>
				          		<span class="glyphicon glyphicon-cloud"></span> Chapitre 1
				            </a>
				            <audio id='beep-two1' controls preload='auto'>
					          	<source src='bootstrap/audio/son3.ogg'>
					        </audio>
				        </li>
				        <li>
				            <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed" id='lecon2'>
				          		<span class="glyphicon glyphicon-inbox"></span> Chapitre 2
				            </a>
				            <audio id='beep-two2' controls preload='auto'>
					          	<source src='bootstrap/audio/son3.ogg' controls>
					        </audio>
				        </li>
				        <li>
				        	<a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed" id='lecon3'>
				        		<span class="glyphicon glyphicon-lock"></span> Chapitre 3
				        	</a>
				        	<audio id='beep-two3' controls preload='auto'>
					          	<source src='bootstrap/audio/son3.ogg' controls>
					        </audio>
				        </li>
				        <li>
				        	<a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed" id='lecon4'>
				        		<span class="glyphicon glyphicon-calendar"></span> Chapitre 4
				        	</a>
				        	<audio id='beep-two4' controls preload='auto'>
					          	<source src='bootstrap/audio/son3.ogg' controls>
					        </audio>
				        </li>
				        <li>
				        	<a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed" id='accueil'>
					          	<i class='fa fa-home fa-2x' aria-hidden="true"></i></span> Accueil
					        </a>
					        <audio id='beep-two6' controls preload='auto'>
					          	<source src='bootstrap/audio/son3.ogg' controls>
					        </audio>
				        </li>
				      </ul>
				    </div><!--/.nav-collapse -->
			    </div>
			  </div>
			</div>
			
			<div class="col-sm-7 col-md-9 col-lg-9 option_lecon" id='c1' style='border:1px solid black; border-radius: 5px;margin-top : 5px;'>
					<div class='bg-primary'>
			          	option des lecons
			        </div>
			        <div class='row'>
						<div class='col-xs-12 col-sm-12 col-md-5 col-lg-5 mise-en-forme'>
			        		Comment expliquer les ressemblances  observees entre les personnes d'une m�me famille?
			        		comment se fait la transmission des caract�res h�r�ditaires et de l'information g�n�tique
			        		d'une g�n�ration � la suivante?
			        		Comment expliquer la nature et l'expression de l'information g�n�tique?
			        	</div>
			        	<div class='col-xs-12 col-sm-12 col-md-7 col-lg-7'>
			        		<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
			        		
			        		<div id="wowslider-container0">
								<div class="ws_images"><ul>
									<li><img src="data0/images/adn.jpg" alt="adn" title="adn" id="wows0_0"/></li>
									<li><img src="data0/images/famille.jpg" alt="famille" title="famille" id="wows0_1"/></li>
									<li><img src="data0/images/jumeaux.jpg" alt="jumeaux" title="jumeaux" id="wows0_2"/></li>
									<li><img src="data0/images/spermatozoides.jpg" alt="wowslideshow" title="spermatozoides" id="wows0_3"/></li>
									<li><img src="data0/images/ovule.jpg" alt="ovule" title="ovule" id="wows0_4"/></li>
								</ul></div>
								<div class="ws_bullets"><div>
									<a href="#" title="adn"><span><img src="data0/tooltips/adn.jpg" alt="adn"/>1</span></a>
									<a href="#" title="famille"><span><img src="data0/tooltips/famille.jpg" alt="famille"/>2</span></a>
									<a href="#" title="jumeaux"><span><img src="data0/tooltips/jumeaux.jpg" alt="jumeaux"/>3</span></a>
									<a href="#" title="spermatozoides"><span><img src="data0/tooltips/spermatozoides.jpg" alt="spermatozoides"/>4</span></a>
									<a href="#" title="ovule"><span><img src="data0/tooltips/ovule.jpg" alt="ovule"/>5</span></a>
								</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
								<div class="ws_shadow"></div>
							</div>	
							<script type="text/javascript" src="engine0/wowslider.js"></script>
							<script type="text/javascript" src="engine0/script.js"></script>
							<!-- End WOWSlider.com BODY section -->
			        	</div>
			        </div>
			</div>
			    
			<div class="col-sm-7 col-md-9 option_lecon" id='option_lecon1' style='display:none; border:1px solid black; border-radius: 5px;margin-top : 5px;'>
					<div class='bg-primary'>
			          	CHAPITRE 1 : GENERALITE  	
			        </div>
			        <div class='row details_lecon detail'>
			        	<div class='col-md-6 col-xs-6 col-sm-12'><br>
			        		<a href='#' class='btn btn-primary btn-large btn-block' id='btn-lecture-lecon1'>Lecture <img src='bootstrap/img/ico-etudier.png'/></a>
			        		<a href='#' class='btn btn-success btn-large btn-block' id='btn-exo-lecon1'>Quiz <img src='bootstrap/img/ico-etudier.png'/></a>
			        	</div>
			        	<div class='col-md-6 col-xs-6 col-sm-12'>
			        		<img src='bootstrap/img/generalite-img.jpg' />
			        	</div>
			        </div>
			        <div class='row details_lecon mise-en-forme' id='exo-lecon1' style='display:none;'>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        		<div class='row'>
			        			<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        				<b>EXERCICES</b> <i style='color:red;'>(Attention rassurez-vous de la bonne r�ponse avant de cocher)</i>
			        			</div>
			        		</div>
			        	</div>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12'>
			        		<div id="myCarousel" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
								  <ol class="carousel-indicators">
									    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									    <li data-target="#myCarousel" data-slide-to="1"></li>
									    <li data-target="#myCarousel" data-slide-to="2"></li>
								  </ol>
								
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
									    <div class="item active">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
							        		<div class='row quizz-lecon1' id='q1' style='text-align:left;'>
											 	 <div class='col-md-8 col-xs-8 col-sm-8 col-lg-8'> a.	Un homme blanc et une femme noire peuvent donner un enfant blanc</div>
                                                 <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                    <label class="radio-inline">
                                                         <input type="radio" name="optradio" class='q1 falseAns'><b>V</b>
                                                    </label>
                                                    <label class="radio-inline">
                                                         <input type="radio" name="optradio" class='q1 trueAns'><b>F</b>
                                                    </label>
                                                 </div>
                                                 <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                 	&emsp;&emsp;&emsp;&emsp;
                                                 </div>
											</div>
											<div class='row quizz-lecon1' id='q2' style='text-align:left;'>
												<div class='col-md-8 col-xs-8 col-sm-8 col-lg-8'>b.	Un enfant peut ressembler � ses grands-parents</div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                    <label class="radio-inline">
                                                         <input type="radio" name="optradio" class='q2 trueAns'><b>V</b>
                                                    </label>
                                                    <label class="radio-inline">
                                                         <input type="radio" name="optradio" class='q2 falseAns'><b>F</b>
                                                    </label>
                                                </div>
                                                 <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                 	&emsp;&emsp;&emsp;&emsp;
                                                 </div>
											</div>
											<div class='row quizz-lecon1' id='q3' style='text-align:left;'>
											  	<div class='col-md-8 col-xs-8 col-sm-8 col-lg-8'>c.	La forme du nez est un caract�re h�r�ditaire</div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q3 trueAns'><b>V</b>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q3 falseAns'><b>F</b>
                                                    </label>
                                                </div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                	&emsp;&emsp;&emsp;&emsp;
                                                </div>
											</div>
									    </div>
									    <div class="item">
											<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
							        		<div class='row quizz-lecon1' id='q4' style='text-align:left;'>
											  	<div class='col-md-8 col-xs-8 col-sm-8 col-lg-8'>d.	Tous les �tres humains appartiennent � la m�me esp�ce</div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q4 trueAns'><b>V</b>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q4 falseAns'><b>F</b>
                                                    </label>
                                                </div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                	&emsp;&emsp;&emsp;&emsp;
                                                </div>
											</div>
											<div class='row quizz-lecon1' id='q5' style='text-align:left;'>
											  	<div class='col-md-8 col-xs-8 col-sm-8 col-lg-8'>e.	Une personne albinos va automatiquement avoir tous les enfants albinos</div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q5 falseAns'><b>V</b>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q5 trueAns'><b>F</b>
                                                    </label>
                                                </div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                	&emsp;&emsp;&emsp;&emsp;
                                                </div>
											</div>
											<div class='row quizz-lecon1' id='q6' style='text-align:left;'>
											  	<div class='col-md-8 col-xs-8 col-sm-8 col-lg-8'>f.	L'albinisme n'est pas un caract�re h�r�ditaire</div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q6 falseAns'><b>V</b>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q6 trueAns'><b>F</b>
                                                    </label>
                                                </div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                	&emsp;&emsp;&emsp;&emsp;
                                                </div>
											</div>
									    </div>
									    <div class="item">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
							        		<div class='row quizz-lecon1' id='q7' style='text-align:left;'>
											  	<div class='col-md-8 col-xs-8 col-sm-8 col-lg-8'>g.	Le mariage entre un noir et une personne m�tiss�e donne des enfants carterons</div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
											  		<label class="radio-inline">
													     <input type="radio" name="optradio" class='q7 trueAns'><b>V</b>
													</label>
													<label class="radio-inline">
													    <input type="radio" name="optradio" class='q7 falseAns'><b>F</b>
													</label>
                                                </div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                	&emsp;&emsp;&emsp;&emsp;
                                                </div>
											</div>
											<div class='row quizz-lecon1' id='q8' style='text-align:left;'>
											  	<div class='col-md-8 col-xs-8 col-sm-8 col-lg-8'>h.	la science qui �tudie l'h�r�dit� s'appelle la g�n�tique</div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q8 trueAns'><b>V</b>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q8 falseAns'><b>F</b>
                                                    </label>
                                                </div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                	&emsp;&emsp;&emsp;&emsp;
                                                </div>
											</div>
											<div class='row quizz-lecon1' id='q9' style='text-align:left;'>
											  	<div class='col-md-8 col-xs-8 col-sm-8 col-lg-8'>i.	le mariage interracial  donne naissance aux m�tiss�es</div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q9 trueAns'><b>V</b>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q9 falseAns'><b>F</b>
                                                    </label>
                                                </div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                	&emsp;&emsp;&emsp;&emsp;
                                                </div>
											</div>
											<div class='row quizz-lecon1' id='q10' style='text-align:left;'>
											  	<div class='col-md-8 col-xs-8 col-sm-8 col-lg-8'>j.	la forme de la bouche n'est pas un caract�re h�r�ditaire</div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q10 falseAns'><b>V</b>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="optradio" class='q10 trueAns'><b>F</b>
                                                    </label>
                                                </div>
                                                <div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
                                                	&emsp;&emsp;&emsp;&emsp;
                                                </div>
											</div>
									    </div>
								  </div>
								
								  <!-- Left and right controls -->
								  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a>
							</div>
			        	</div>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        		<div class='row'>
			        			<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;color:red;'>
			        				note : <span id='note1' style='color:red'><b>20</b></span>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			        <div class='row details_lecon mise-en-forme' id='lecture-lecon1' style='display:none;'>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12'>
			        		<b>Un arbre g�n�alogique : Cliquez sur un des petit-fils pour observer.</b>
			        	</div>
			        	<div class='col-md-8 col-xs-12 col-sm-12 col-lg-8' style="background:url('bootstrap/img/arbre-genealogique/abr.png');background-repeat:no-repeat;background-position:center;background-size:100%;">
			        		<div class='row ligne-abr'>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
			        			</div>
			        			
			        		</div>
			        		<div class='row ligne-abr'>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
			        			</div>
			        			<div class='col-md-4 col-xs-4 col-sm-4 col-lg-4'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
								</div>
			        		</div>
			        		<div class='row ligne-abr'>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2 individu' id='31'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne3/1.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2 individu' id='32'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne3/2.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2 individu' id='33'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne3/3.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2 individu' id='34'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne3/4.png'/></img>	
			        			</div>
			        			<div class='co-md-2 col-xs-2 col-sm-2 col-lg-2'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne1/1.png'/></img>	
			        			</div>
			        			<div class='col-md-2 col-xs-2 col-sm-2 col-lg-2 individu' id='36'>
			        				<img src='bootstrap/img/arbre-genealogique/ligne3/5.png'/></img>	
			        			</div>	
			        		</div>
			        	</div>
			        	<div class='col-md-4 col-xs-12 col-sm-12 col-lg-4 caractere' id='indiv34' style='display:none;height:300px;overflow:auto;'>
			        		<img style='display:inline;' src='bootstrap/img/arbre-genealogique/ligne3/4min.png'/></img> CURIE
			        		<div style="color:mediumblue" class="list-group">
							  <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Couleur de yeux :</span> elle h�rite des yeux de son p�re Roger
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme de la bouche :</span> elle l'h�rite de sa m�re Agnes qui l'h�rite de son p�re Maximilien.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'> elle h�rite de son p�re  Roger.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	   	<span class='phenotype' style='display:block;'>Forme du menton :</span> elle h�rite de son p�re Roger.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme des oreilles :</span> elle les h�rite de son p�re Roger
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Couleur de la peau :</span> elle h�rite de sa m�re Karine qui elle h�rite de son p�re Bernard
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme du visage :</span> un m�lange de son p�re et de sa m�re
							  </a>
							</div>
			        	</div>
			        	<div class='col-md-4 col-xs-12 col-sm-12 col-lg-4 caractere' id='indiv31' style='display:none;height:300px;overflow:auto;'>
			        		<img style='display:inline;' src='bootstrap/img/arbre-genealogique/ligne3/1min.png'/></img> MAX
			        		<div style="color:mediumblue" class="list-group">
							  <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Couleur de yeux :</span> Il h�rite des yeux de sa m�re Agn�s qui l'h�rite de son p�re Maxilimien.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme de la bouche :</span> Il l'h�rite de son p�re Roger.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme du nez :</span> Il h�rite de son p�re  Roger.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	   	<span class='phenotype' style='display:block;'>Forme du menton :</span> Il h�rite de sa m�re Agn�s qui l'h�rite de sa m�re Bernadette.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme des oreilles :</span> Il les h�rite de son p�re Roger
							  </a>
							  
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme du visage :</span> Il h�rite de la forme du visage de sa m�re Agnes qui elle l'h�rite de sa m�re Bernadette
							  </a>
							</div>
			        	</div>
			        	<div class='col-md-4 col-xs-12 col-sm-12 col-lg-4 caractere' id='indiv32' style='display:none;height:300px;overflow:auto;'>
			        		<img style='display:inline;' src='bootstrap/img/arbre-genealogique/ligne3/2min.png'/></img> RICE
			        		<div style="color:mediumblue" class="list-group">
							  <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Couleur de yeux :</span> Elle h�rite des yeux de son p�re Roger.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme de la bouche :</span> elle l'h�rite de sa m�re Agnes qui l'h�rite de son p�re Maximilien.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme du nez :</span> Elle l'h�rite de son p�re  Roger.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	   	<span class='phenotype' style='display:block;'>Forme du menton :</span> Elle h�rite de sa m�re Agn�s qui l'h�rite de sa m�re Bernadette.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme des oreilles :</span> Elle les h�rite de son p�re Roger
							  </a>
							  
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme du visage :</span> Elle h�rite de la forme du visage de sa m�re Agnes qui elle l'h�rite de sa m�re Bernadette
							  </a>
							</div>
			        	</div>
			        	<div class='col-md-4 col-xs-12 col-sm-12 col-lg-4 caractere' id='indiv33' style='display:none;height:300px;overflow:auto;'>
			        		<img style='display:inline;' src='bootstrap/img/arbre-genealogique/ligne3/3min.png'/></img> BARACK
			        		<div style="color:mediumblue" class="list-group">
							  <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Couleur de yeux :</span> Il h�rite des yeux de sa m�re Agn�s qui l'h�rite de son p�re Maxilimien.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme de la bouche :</span> Il l'h�rite de sa m�re Agnes qui l'h�rite de son p�re Maximilien.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme du nez :</span> Il h�rite de son p�re  Roger.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	   	<span class='phenotype' style='display:block;'>Forme du menton :</span> Il h�rite de sa m�re Agn�s qui l'h�rite de sa m�re Bernatte.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme des oreilles :</span> Il les h�rite de son p�re Roger
							  </a>
							  
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme du visage :</span> Il h�rite de la forme du visage de sa m�re Agnes qui elle l'h�rite de sa m�re Bernadette
							  </a>
							</div>
			        	</div>
			        	<div class='col-md-4 col-xs-12 col-sm-12 col-lg-4 caractere' id='indiv36' style='display:none;height:300px;overflow:auto;'>
			        		<img style='display:inline;' src='bootstrap/img/arbre-genealogique/ligne3/5min.png'/></img> SHEFIRA
			        		<div style="color:mediumblue" class="list-group">
							  <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Couleur de yeux :</span> Il h�rite des yeux de sa m�re Agn�s qui l'h�rite de son p�re Maxilimien.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme de la bouche :</span> Elle l'h�rite de sa m�re Sidonie.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme du nez :</span> Il h�rite de son p�re  Michel qui a h�rit� de son p�re Max.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	   	<span class='phenotype' style='display:block;'>Forme du menton :</span> Il h�rite de sa m�re Sidonie.
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme des oreilles :</span> Il les h�rite de sa m�re Siodnie
							  </a>
							  
							  <a style="color:mediumblue" href="#" class="list-group-item">
							  	    <span class='phenotype' style='display:block;'>Forme du visage :</span> Il h�rite de la forme du visage de sa m�re
							  </a>
							</div>
			        	</div>
			        </div>
			</div>
			<div class="col-sm-7 col-md-9 option_lecon" id='option_lecon2' style='display:none; border:1px solid black; border-radius: 5px;margin-top : 5px;'>
					<div class='bg-primary'>
			          	LECON 2 : TRANSMITION DE L'INFORMATION GENETIQUE
			         </div>
			        <div class='row details_lecon detail'>
			        	<div class='col-md-6 col-xs-6 col-sm-12'><br>
			        		<!--  a href='#' class='btn btn-primary btn-large btn-block' id='btn-lecture-lecon2'>Lecture <img src='bootstrap/img/ico-etudier.png'/></a-->
			        		<a href='#' class='btn btn-success btn-large btn-block' id='btn-exo-lecon2'>Quiz <img src='bootstrap/img/ico-etudier.png'/></a>
                            <a href='#' class='btn btn-info btn-large btn-block' id='btn-protocol-lecon2'>Protocole exp�rimental <img src='bootstrap/img/ico-etudier.png'/></a>
			        		<a href='laboratoire.php' class='btn btn-warning btn-large btn-block' title="R�alisation d'un caryotype">Experiences <img src='bootstrap/img/ico-revision.png'/></a>
			        	</div>
			        	<div class='col-md-6 col-xs-6 col-sm-12'>
			        		<img src='bootstrap/img/transmission-img.jpg' />
			        	</div>
			        </div>
			        <div class='row details_lecon mise-en-forme' id='exo-lecon2' style='display:none;' align='left'>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        		<div class='row'>
			        			<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        				<b>EXERCICES</b> <i style='color:red;'>(Attention rassurez-vous de la bonne r�ponse avant de cocher)</i>
			        			</div>
			        		</div>
			        	</div>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12 mise-en-forme'>
			        		<div id="myCarousel2" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
								  <ol class="carousel-indicators">
									    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
									    <li data-target="#myCarousel2" data-slide-to="1"></li>
									    <li data-target="#myCarousel2" data-slide-to="2"></li>
									    <li data-target="#myCarousel2" data-slide-to="3"></li>
									    <li data-target="#myCarousel2" data-slide-to="4"></li>
									    
									    <li data-target="#myCarousel2" data-slide-to="5"></li>
									    <li data-target="#myCarousel2" data-slide-to="6"></li>
									    <li data-target="#myCarousel2" data-slide-to="7"></li>
									    <li data-target="#myCarousel2" data-slide-to="8"></li>
									    <li data-target="#myCarousel2" data-slide-to="9"></li>
									    
									    <li data-target="#myCarousel2" data-slide-to="10"></li>
									    <li data-target="#myCarousel2" data-slide-to="11"></li>
									    <li data-target="#myCarousel2" data-slide-to="12"></li>
									    <li data-target="#myCarousel2" data-slide-to="13"></li>
									    <li data-target="#myCarousel2" data-slide-to="14"></li>
									    
									    <li data-target="#myCarousel2" data-slide-to="15"></li>
									    <li data-target="#myCarousel2" data-slide-to="16"></li>
									    <li data-target="#myCarousel2" data-slide-to="17"></li>
									    <li data-target="#myCarousel2" data-slide-to="18"></li>
									    <li data-target="#myCarousel2" data-slide-to="19"></li>
								  </ol>
								
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
									    <div class="item active">
									      	<h3>Parmi les affirmations suivantes, rel�ve celles qui sont exactes.</h3>
							        		<span id='q1'>1.	Le caryotype d'une cellule male est diff�rent de celui d'une cellule femelle au niveau de</span>
							        		
							        		<div class="radio quizz-lecon2"  style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q1 falseAns 1'>a. La 8e paire de chromosome</label>
											</div>
											<div class="radio quizz-lecon2"  style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q1 falseAns 1'>b. La 13e paire de chromosome</label>
											</div>
											<div class="radio quizz-lecon2"  style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q1 falseAns 1'>c. La 20e paire de chromosome</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q1 trueAns 1'>d. La 23e paire de chromosome</label>
											</div>
									    </div>
										
									    <div class="item">
											<span id='q2'>2.	Un individu souffrant du syndrome de trisomie 21 poss�de</span>
							        		
							        		<div class="radio quizz-lecon2" style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q2 falseAns 1'>&nbsp;&nbsp;&nbsp;&nbsp;a.	1 chromosome dans sa 21e paire</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q2 falseAns 1'>&nbsp;&nbsp;&nbsp;&nbsp;b.	2 chromosomes dans sa 21e paire</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q2 trueAns 1'>&nbsp;&nbsp;&nbsp;&nbsp;c.	3 chromosomes dans sa 21e paire</label>
											</div>
									    </div>
									
									   <div class="item">
											<span id='q3'>3.	Un individu atteint du syndrome de down est de sexe :</span>
							        		
							        		<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q3 falseAns 1'>a.	Masculin</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q3 trueAns 1'>b.	F�minin</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q3 falseAns 1'>c.	Masculin et f�minin</label>
											</div>
									    </div>
									
									    <div class="item">
											<span id='q4'>4. Un individu atteint du syndrome de kleinefelter est de sexe :</span>
							        		
							        		<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q4 trueAns 1'>a.	Masculin</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q4 falseAns 1'>b.	F�minin</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q4 falseAns 1'>c.	Masculin et f�minin</label>
											</div>
									    </div>
									    <div class="item">
											<span id='q5'>5. Un individu atteint du syndrome de klinefelter poss�de dans son caryotype</span>
							        		
							        		<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q5 falseAns 1'>a.	46 chromosomes</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q5 falseAns 1'>b.	45 chromosomes</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q5 trueAns 1'>c.	47 chromosomes</label>
											</div>
									    </div>
									    <div class="item">
											<span id='q6'>6. Pour arr�ter la division cellulaire on utilise comme colorant :</span>
							        		
							        		<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q6 trueAns 1'>a.	La colchicine</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q6 falseAns 1'>b.	Le cristal violet</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q6 falseAns 1'>c.	Le m�thyl de propyl�ne </label>
											</div>
									    </div>
									    <div class="item">
											<span id='q7'>7.	Les chromosomes :</span>
							        		
							        		<div class="radio quizz-lecon2" style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q7 falseAns 1'>a.	Sont toujours visibles dans le noyau de toutes les cellules ;</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q7 falseAns 1'>b.	Ne sont pr�sents dans le noyau que lorsque la cellule se divise</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q7 trueAns 1'>c.	Sont toujours pr�sents, mais ne sont facilement visibles que lorsque la cellule se divise</label>
											</div>
									    </div>
									    <div class="item">
											<span id='q8'>8.	Dans l'esp�ce humaine, le caryotype comporte :</span>
							        		
							        		<div class="radio quizz-lecon2" style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q8 falseAns 1'>a.	Toujours  23 paires de chromosomes identiques deux a deux.</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q8 falseAns 1'>b. Un chromosome de plus chez l'homme que chez la femme</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q8 trueAns 1'>c.	Quarante-six chromosomes dont un seul diff�rent chez l'homme et chez la femme</label>
											</div>
									    </div>
									    
									    <div class="item">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
							        		<div class='quizz-lecon2' id='q9' style='text-align:left;'>
											 	 a.	La colchicine est un colorant utilise pour �clater la cellule  
											  	<label class="radio-inline">
												     <input type="radio" name="optradio" class='q9 trueAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												     <input type="radio" name="optradio" class='q9 falseAns 1'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon2' id='q10' style='text-align:left;'>
												b.	Pour r�aliser un caryotype en laboratoire, on n'utilise pas le tube a essaie ; 
												<label class="radio-inline">
													 <input type="radio" name="optradio" class='q10 falseAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												     <input type="radio" name="optradio" class='q10 trueAns 1'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon2' id='q11' style='text-align:left;'>
											  	c.	Dans le tube a essaie, on place la colchicine avant le sang ; 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q11 falseAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q11 trueAns 1'><b>F</b>
												</label>
											</div>
									    </div>
									    <div class="item">
											<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
							        		<div class='quizz-lecon2' id='q12' style='text-align:left;'>
											  	d.	Pour r�aliser un caryotype en laboratoire, le port des gangs est obligatoire ; 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q12 trueAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q12 falseAns 1'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon2' id='q13' style='text-align:left;'>
											  	e.	En laboratoire, on peut observer le caryotype sans microscope 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q13 falseAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q13 trueAns 1'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon2' id='q14' style='text-align:left;'>
											  	f.	Le microscope �lectronique avec appareil photo est  indispensable pour la r�alisation du caryotype ;
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q14 trueAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q14 falseAns 1'><b>F</b>
												</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
											<div class='quizz-lecon2' id='q15' style='text-align:left;'>
											  	g.	La r�union au hasard d'un spermatozo�de et d'un ovule produit autant d'oeufs poss�dant XY que d'oeufs poss�dant XX ; 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q15 falseAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q15 trueAns 1'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon2' id='q16' style='text-align:left;'>
											  	h.	Dans l'esp�ce humaine, le nombre de chromosome varie selon le g�ne des individus ;
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q16 falseAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q16 trueAns 1'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon2' id='q17' style='text-align:left;'>
											  	i.	La trisomie 21 est caract�ris�e par 21 paires de chromosomes au lieu de 23 ; 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q17 falseAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q17 trueAns 1'><b>F</b>
												</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
											<div class='quizz-lecon2' id='q18' style='text-align:left;'>
											  	j.	Le sexe d'un enfant est d�termin� par un ovule ;  
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q18 falseAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q18 trueAns 1'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon2' id='q19' style='text-align:left;'>
											  	k.	Au cours de la division cellulaire, les chromosomes apparaissent constitu�s de deux chromatides ;
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q19 trueAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q19 falseAns 1'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon2' id='q20' style='text-align:left;'>
											  	l.	La f�condation r�tablit le nombre de chromosome caract�ristique de l'esp�ce ; 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q20 trueAns 1'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q20 falseAns 1'><b>F</b>
												</label>
											</div>
									    </div>
								  </div>
								
								  <!-- Left and right controls -->
								  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a>
							</div>
			        	</div>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        		<div class='row'>
			        			<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;color:red;'>
			        				note : <span id='note2' style='color:red'><b>20</b></span>
			        			</div>
			        		</div>
			        	</div>
			        </div>
                    
                    <div class='row details_lecon mise-en-forme' id='protocol-lecon2' style='display:none;'>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='height:400px;overflow:auto;'>
			        		Etapes de r�alisation d'un caryotype.
                            <div style="color:mediumblue" class="list-group">
							  <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Etape 1 : Culture des cellules</span> 
                                    <div style="text-align:left;">
                                    	Tout d'abord rassurez-vous que vous portez une blouse.</br> 
                                        <b>&rarr;</b> A l'aide de l'outil pipette <img style='height:20px;' src='bootstrap/img/icones/pipette.png'/> prenez une goutte de sang <img  src='bootstrap/img/icones/sang.png'/></br> 
                                        <b>&rarr;</b> Deposer dans le tube � essai <img style='height:25px;' src='bootstrap/img/icones/tube_essai_vide_gr.png'/> le sang contenu dans la pipette </br>
                                    </div>
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Etape 2 : Obtenir des m�taphases</span> 
                                    <div style="text-align:left;">
                                    	<b>&rarr;</b>A l'aide de l'outil pipette <img style='height:20px;' src='bootstrap/img/icones/pipette.png'/> prenez une goutte de Colchicine <img  src='bootstrap/img/icones/colchicine.png'/></br>
                                        <b>&rarr;</b> Ajouter dans le tube � essai <img style='height:25px;' src='bootstrap/img/icones/tube_essai_rouge_gr0.png'/> la colchicine contenue dans la pipette. (Ceci a pour effet de bloquer la division cellulaire au stade de m�taphase)</br>
                                        <b>&rarr;</b>A l'aide de l'outil pipette <img style='height:20px;' src='bootstrap/img/icones/pipette.png'/> prenez une goutte de Cristale violet <img  src='bootstrap/img/icones/cristale-v.png'/></br>
                                        <b>&rarr;</b> Ajouter dans le tube � essai <img style='height:25px;' src='bootstrap/img/icones/tube_essai_rouge_gr1.png'/> le critale violet contenu dans la pipette (pour la coloration des chromosomes)</br>
                                    </div>
							  </a>
                              <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Etape 3 : Identification des chromosomes</span> 
                                    <div style="text-align:left;">
                                    	<b>&rarr;</b>A l'aide de l'outil pipette <img style='height:20px;' src='bootstrap/img/icones/pipette.png'/> prenez une goutte du m�lange contenu dans le tube � essai <img style='height:25px;' src='bootstrap/img/icones/tube_essai_violet_gr.png'/></br>
                                        <b>&rarr;</b> D�poser ce melange sur la lame <img style='height:25px;' src='bootstrap/img/icones/lame_grand.png'/> </br>
                                        <b>&rarr;</b>D�poser la lame sur le microscope optique puis filmer le r�sultat  <img style='height:25px;' src='bootstrap/img/icones/capture.png'/></br>
                                        <b>&rarr;</b> Ajouter dans le tube � essai <img style='height:25px;' src='bootstrap/img/icones/tube_essai_rouge_gr1.png'/> le critale violet contenu dans la pipette (pour la coloration des chromosomes)</br>
                                    </div>
							  </a>
                              <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Etape 4 : Classification des chromosomes</span> 
                                    <div style="text-align:left;">
                                    	<b>&rarr;</b> Dans l'image obtenue, vous observez des chromosomes �parpill�s. S�lectionnez-les un � un pour les ranger par paire homologue dans le tableau de caryotype</br>
                                        <b>&rarr;</b> Si le principe est acquis, vous pouvez ranger automatiquement en cliquant sur le bouton "Ranger".</br>
                                    </div>
							  </a>
                              <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Etape 5 : Identification du caryotype</span> 
                                    <div style="text-align:left;">
                                    	<b>&rarr;</b> Parmis les types de caryotypes propos�s cochez celui qui correspond � cette cellule</br>
                                    </div>
							  </a>
                           </div>
                        </div>
                    </div>
                    
			        <div class='row details_lecon mise-en-forme' id='lecture-lecon2' style='display:none;'>
			        	<div class='col-md-6 col-xs-12 col-sm-12 col-lg-6 mise-en-forme'>
			        	
			        	</div>
			        </div>
			</div>
			<div class="col-sm-7 col-md-9 option_lecon" id='option_lecon3' style='display:none; border:1px solid black; border-radius: 5px;margin-top : 5px;'>
					<div class='bg-primary'>
			          	LECON 3 : LA NATURE DE L'INFORMATION GENETIQUE
			         </div>
			        <div class='row details_lecon detail'>
			        	<div class='col-md-6 col-xs-6 col-sm-12'><br>
			        		<!-- a href='#' class='btn btn-primary btn-large btn-block' id='btn-lecture-lecon3'>Lecture <img src='bootstrap/img/ico-etudier.png'/></a-->
			        		<a href='#' class='btn btn-success btn-large btn-block' id='btn-exo-lecon3'>Quiz <img src='bootstrap/img/ico-etudier.png'/></a>
                            <a href='#' class='btn btn-default btn-large btn-block' id='btn-protocol-lecon3'>Protocole exp�rimental <img src='bootstrap/img/ico-etudier.png'/></a>
			        		<a href='labo2.php' class='btn btn-info btn-large btn-block' title="D�termination de groupes sanguins par la m�thode de Beth-Vincent (utilisation de S�rum)">Experiences 1<img src='bootstrap/img/ico-revision.png'/></a>
			        		<a href='labo3.php' class='btn btn-warning btn-large btn-block' title="D�termination de groupes sanguins par la m�thode de Simonin (Utilisation d'h�maties)">Experiences 2<img src='bootstrap/img/ico-revision.png'/></a>
			        	</div>
			        	<div class='col-md-6 col-xs-6 col-sm-12'>
			        		<img src='bootstrap/img/gene.jpg' />
			        	</div>
			        </div>
			        <div class='row details_lecon mise-en-forme' id='exo-lecon3' style='display:none;'>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        		<div class='row'>
			        			<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        				<b>EXERCICES</b> <i style='color:red;'>(Attention rassurez-vous de la bonne r�ponse avant de cocher)</i>
			        			</div>
			        		</div>
			        	</div>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12'>
			        		<div id="myCarousel3" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
								  <ol class="carousel-indicators">
									    <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
									    <li data-target="#myCarousel3" data-slide-to="1"></li>
									    <li data-target="#myCarousel3" data-slide-to="2"></li>
									    <li data-target="#myCarousel3" data-slide-to="3"></li>
									    <li data-target="#myCarousel3" data-slide-to="4"></li>
								  </ol>
								
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
									    <div class="item active">
									      	<h3>Parmi les affirmations suivantes, rel�ve celles qui sont exactes.</h3>
							        		<span id='q1'>1.	Les g�nes sont</span>
							        		
							        		<div class="radio quizz-lecon3"  style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q1 trueAns 2'>a.	Des unit�s d'information situ�es au m�me endroit sur les deux chromosomes d'une m�me paire</label>
											</div>
											<div class="radio quizz-lecon3"  style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q1 falseAns 2'>b.   Des unit�s d'information rigoureusement identique sur les deux chromosomes   d'une m�me paire ;</label>
											</div>
											<div class="radio quizz-lecon3"  style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q1 falseAns 2'>c.	Des versions diff�rentes d'un m�me all�le</label>
											</div>
											
									    </div>
									    <div class="item">
									      	<h3>Parmi les affirmations suivantes, rel�ve celles qui sont exactes.</h3>
							        		<span id='q2'>2.	Parmi les groupes sanguins suivant existe le donneur universel : c'est le groupe</span>
							        		
							        		<div class="radio quizz-lecon3"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q2 falseAns 2'>a.	Le groupe A</label>
											</div>
											<div class="radio quizz-lecon3"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q2 falseAns 2'>b. Le groupe B</label>
											</div>
											<div class="radio quizz-lecon3"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q2 trueAns 2'>c. Le groupe O</label>
											</div>
											<div class="radio quizz-lecon2" style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q2 falseAns 2'>d. Le groupe AB</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>Parmi les affirmations suivantes, rel�ve celles qui sont exactes.</h3>
							        		<span id='q3'>3.	Parmi les groupes sanguins quel est celui qui agglutine avec le s�rum anti A</span>
							        		
							        		<div class="radio quizz-lecon3"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q3 trueAns 2'>a.	Le groupe A</label>
											</div>
											<div class="radio quizz-lecon3"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q3 falseAns 2'>b. Le groupe B</label>
											</div>
											<div class="radio quizz-lecon3"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q3 falseAns 2'>c. Le groupe O</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>Parmi les affirmations suivantes, rel�ve celles qui sont exactes.</h3>
							        		<span id='q4'>4.	Parmi les groupes sanguins quel est celui qui agglutine en pr�sence du s�rum anti B</span>
							        		
							        		<div class="radio quizz-lecon3"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q4 falseAns 2'>a.	Le groupe A</label>
											</div>
											<div class="radio quizz-lecon3"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q4 trueAns 2'>b. Le groupe B</label>
											</div>
											<div class="radio quizz-lecon3"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q4 falseAns 2'>c. Le groupe O</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>Parmi les affirmations suivantes, rel�ve celles qui sont exactes.</h3>
							        		<span id='q5'>5.	La paire de chromosomes portant le g�ne responsable du groupe sanguin est :</span>
							        		
							        		<div class="radio quizz-lecon3"  style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q5 falseAns 2'>a.	La 8e paire de chromosome</label>
											</div>
											<div class="radio quizz-lecon3"  style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q5 trueAns 2'>b.	La 9e paire de chromosome</label>
											</div>
											<div class="radio quizz-lecon3"  style='text-align:left;'>
											  <label><input type="radio" name="optradio" class='q5 falseAns 2'>c.	La 23e paire de chromosome</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
											<div class='quizz-lecon3' id='q6' style='text-align:left;'>
											  	a.	Le groupe sanguin O agglutine en pr�sence du   s�rum anti AB  
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q6 falseAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q6 trueAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon3' id='q7' style='text-align:left;'>
											  	b.	Le groupe AB est le receveur universel
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q7 trueAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q7 falseAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon3' id='q8' style='text-align:left;'>
											  	c.	Le groupe AB n'agglutine pas en pr�sence du s�rum anti AB 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q8 falseAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q8 trueAns 2'><b>F</b>
												</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
											<div class='quizz-lecon3' id='q9' style='text-align:left;'>
											  	d.	Dans une cellule les all�les d'un g�ne peuvent �tre identiques ou diff�rents  
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q9 trueAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q9 falseAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon3' id='q10' style='text-align:left;'>
											  	e.	Le g�ne est une portion de chromosome 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q10 trueAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q10 falseAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon3' id='q11' style='text-align:left;'>
											  	f.	Un papa de groupe AB peut avoir un enfant de groupe A
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q11 trueAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q11 falseAns 2'><b>F</b>
												</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
											<div class='quizz-lecon3' id='q12' style='text-align:left;'>
											  	g.	Une maman de groupe O peut avoir un enfant de groupe AB    
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q12 falseAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q12 trueAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon3' id='q13' style='text-align:left;'>
											  	h.	Le s�rum anti A n'agglutine pas du tout le groupe AB 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q13 falseAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q13 trueAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon3' id='q14' style='text-align:left;'>
											  	i.	L'agglutination est caract�ris�e par la destruction des h�maties  
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q14 trueAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q14 falseeAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon3' id='q15' style='text-align:left;'>
											  	j.	L'agglutination est caract�ris�e par la destruction des antis corps  
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q15 falseAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q15 trueAns 2'><b>F</b>
												</label>
											</div>
									    </div>
								  </div>
								
								  <!-- Left and right controls -->
								  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a>
							</div>
			        	</div>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        		<div class='row'>
			        			<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;color:red;'>
			        				note : <span id='note3' style='color:red'><b>30</b></span>
			        			</div>
			        		</div>
			        	</div>
			        </div>
                    
                    <div class='row details_lecon mise-en-forme' id='protocol-lecon3' style='display:none;' align='left'>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='height:400px;overflow:auto;'>
                        	Etapes de d�termination de groupe sanguin.
                            <div style="color:mediumblue" class="list-group">
							  <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Etape 1 : Pr�lever du sang sang</span> 
                                    <div style="text-align:left;">
                                    	Tout d'abord rassurez-vous que vous portez une blouse.</br> 
                                        <b>&rarr;</b> A l'aide de l'outil pipette <img style='height:20px;' src='bootstrap/img/icones/pipette.png'/> prenez du sang <img  src='bootstrap/img/icones/sang.png'/> que vous d�poserez sur chacune des lames <img style='height:25px;' src='bootstrap/img/icones/lame_grand2.png'/></br>
                                    </div>
							  </a>
							  <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Etape 2 : Ajouter des serums</span> 
                                    <div style="text-align:left;">
                                    	<b>&rarr;</b> A l'aide de l'outil pipette <img style='height:20px;' src='bootstrap/img/icones/pipette.png'/> prenez une goutte de serum anti-A et d�poser sur une lame </br>
                                        <b>&rarr;</b> Prenez une goutte de serum anti-B et d�poser sur une autre lame </br>
                                        <b>&rarr;</b> Prenez une goutte de serum anti-AB et d�poser sur une lame differente des autres</br>
                                        <b>&rarr;</b> Enfin d�poser une goute de serum anti-D ou anti-Rh�sus su la derni�re lame</br>
                                    </div>
							  </a>
                              <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Etape 2 : Observer l'agglutination</span> 
                                    <div style="text-align:left;">
                                    	<b>&rarr;</b> Observer les lames et noter celles sur lesquelles il y a agglutination. </br>
                                    </div>
							  </a>
                              <a style="color:mediumblue" href="#" class="list-group-item">
									<span class='phenotype' style='display:block;'>Etape 2 : Analyser et conclure</span> 
                                    <div style="text-align:left;">
                                    	<b>&rarr;</b> S'il y a agglutination sur la lame contenant le serum anti-D alors le rh�sus est positif. Sinon le rh�sus est n�gatif </br>
                                        <b>&rarr;</b> S'il y a agglutination en AB et en A il sagit du groupe sangin A </br>
                                        <b>&rarr;</b> S'il y a agglutination en AB et en B il sagit du groupe sangin B </br>
                                        <b>&rarr;</b> S'il y a agglutination en AB en B et en A il sagit du groupe sangin AB</br>
                                        <b>&rarr;</b> S'il n'y a agglutination ni en AB, ni en B, ni en A il sagit du groupe sangin O</br>
                                    </div>
							  </a>
                        </div>
                    </div>
                    
			        <div class='row details_lecon mise-en-forme' id='lecture-lecon3' style='display:none;'>
			        	<div class='col-md-6 col-xs-6 col-sm-12 col-lg-12'>
			        	
			        	</div>
			        </div>
			</div>
			<div class="col-sm-7 col-md-9 option_lecon" id='option_lecon4' style='display:none; border:1px solid black; border-radius: 5px;margin-top : 5px;'>
					<div class='bg-primary'>
			          	LECON 4 : L'EXPRESSION DE L'INFORMATION GENETIQUE
			         </div>
			        <div class='row details_lecon detail'>
			        	<div class='col-md-6 col-xs-6 col-sm-12'><br>
			        		<a href='#' class='btn btn-primary btn-large btn-block' id='btn-lecture-lecon4'>Echiquier de croisement <img src='bootstrap/img/ico-etudier.png'/></a>
			        		<a href='#' class='btn btn-success btn-large btn-block' id='btn-exo-lecon4'>Quiz <img src='bootstrap/img/ico-etudier.png'/></a>
			        		
			        	</div>
			        	<div class='col-md-6 col-xs-6 col-sm-12'>
			        		<img src='bootstrap/img/expression-img.jpg' />
			        	</div>
			        </div> 
			        <div class='row details_lecon mise-en-forme' id='exo-lecon4' style='display:none;'>
			        	<div class='col-md-6 col-xs-6 col-sm-12 col-lg-12'>
			        	
			        	</div>
			        </div>
			        <div class='row details_lecon mise-en-forme' id='lecture-lecon4' style='display:none;'>
			        	<div class='col-md-6 col-xs-6 col-sm-12 col-lg-12'>
			        		<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        		<div class='row'>
			        			<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        				<b>EXERCICES</b> <i style='color:red;'>(Attention rassurez-vous de la bonne r�ponse avant de cocher)</i>
			        			</div>
			        		</div>
			        	</div>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12'>
			        		<div id="myCarousel4" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
								  <ol class="carousel-indicators">
									    <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
									    <li data-target="#myCarousel4" data-slide-to="1"></li>
									    <li data-target="#myCarousel4" data-slide-to="2"></li>
									    <li data-target="#myCarousel4" data-slide-to="3"></li>
									    <li data-target="#myCarousel4" data-slide-to="4"></li>
								  </ol>
								
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
								  		<div class="item active">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
											<div class='quizz-lecon4' id='q1' style='text-align:left;'>
											  	a.	Les cellules de la peau et les cellules du pancr�as sont diff�rentes  
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q1 falseAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q1 trueAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon4' id='q2' style='text-align:left;'>
											  	b.	La couleur des cheveux est un caract�re h�r�ditaire
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q2 falseAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q2 trueAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon4' id='q3' style='text-align:left;'>
											  	c.	Un homme  AA et une femme AS ont la possibilit� de faire un enfant dr�panocytaire 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q3 falseAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q3 trueAns 2'><b>F</b>
												</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
											<div class='quizz-lecon4' id='q4' style='text-align:left;'>
											  	d.	Un homme AS et une femme AS ont la possibilit� de faire un enfant dr�panocytaire  
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q4 trueAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q4 falseAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon4' id='q5' style='text-align:left;'>
											  	e.	le mariage entre une femme AS et un homme AS n'est pas encourag� 
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q5 trueAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q5 falseAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon4' id='q6' style='text-align:left;'>
											  	f.	le mariage entre une femme AS et un homme AA n'est pas encourag�
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q6 falseAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q6 trueAns 2'><b>F</b>
												</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>R�ponds par vrai ou faux en cochant la bonne r�ponse</h3>
											<div class='quizz-lecon4' id='q7' style='text-align:left;'>
											  	g.	la probabilit� pour un homme AA et une femme AA de faire des enfants AS est nulle   
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q7 trueAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q7 falseAns 2'><b>F</b>
												</label>
											</div>
											<div class='quizz-lecon4' id='q8' style='text-align:left;'>
											  	h.	les examens pr�nuptiaux  ne sont pas importants
											  	<label class="radio-inline">
													<input type="radio" name="optradio" class='q8 falseAns 2'><b>V</b>
												</label>
												<label class="radio-inline">
												    <input type="radio" name="optradio" class='q8 trueAns 2'><b>F</b>
												</label>
											</div>
									    </div>
									    <div class="item">
									      	<h3>Exercice 2</h3>
											<div class='quizz-lecon4' id='q9' style='text-align:left;'>
											  	1.	Soit un couple o�: <br>
												-	la femme poss�de en double exemplaire l'all�le dirigeant la synth�se d'une h�moglobine normale not�  A.<br>
												-	l'homme poss�de l'all�le normal et l'all�le dirigeant la synth�se d'une h�moglobine anormale S
											  	<span style='text-align:center;'>   
												  	<label class="radio-inline">
														<input type="radio" name="optradio" class='q9 falseAns 2'><b>OUI</b>
													</label>
													<label class="radio-inline">
													    <input type="radio" name="optradio" class='q9 trueAns 2'><b>NON</b>
													</label>
												</span>
											</div>
									    </div>
									    <div class="item">
							        		<span id='q10'>
							        			2.	un couple non dr�panocytaire qui a d�j� un enfant atteint
									      		de la dr�panocytose attend un autre enfant. Quelle est la probabilit� 
									      		pour que ce dernier soit victime de cette maladie h�r�ditaire
							        		</span>
							        		
							        		<div class="radio quizz-lecon4"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q1 falseAns 2'>a.	0%</label>
											</div>
											<div class="radio quizz-lecon4"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q1 falseAns 2'>b.	25%</label>
											</div>
											<div class="radio quizz-lecon4"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q1 trueAns 2'>c.	50%</label>
											</div>
											<div class="radio quizz-lecon4"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q1 falseAns 2'>d.	75%</label>
											</div>
											<div class="radio quizz-lecon4"  style='text-align:left;'>
											  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label><input type="radio" name="optradio" class='q1 falseAns 2'>e.	100%</label>
											</div>
									    </div>
								  </div>
								
								  <!-- Left and right controls -->
								  <a class="left carousel-control" href="#myCarousel4" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel4" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a>
							</div>
			        	</div>
			        	<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;'>
			        		<div class='row'>
			        			<div class='col-md-12 col-xs-12 col-sm-12 col-lg-12' style='border-radius:1000px;border:1px solid #c0c0c0;color:red;'>
			        				note : <span id='note3' style='color:red'><b>20</b></span>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			</div>
			<div class="col-sm-7 col-md-9 option_lecon" id='preference_option' style='display:none; border:1px solid black; border-radius: 5px;margin-top : 5px;'>
					<div class='bg-primary'>
			          	PREFERENCE DES MENUS
			         </div>
			        ldkldkfjldkjf <br>
			        ksjdhksjdhkjsd<br>
			        skjhksjdfsdkjf<br>  
			</div>
		</div>
	</div>
	<section id='entete'>
    	<div class='container'>
			<div class="row">
				<div class="col-md-12" id="footer">
					DITE-ENS - copyright � 2016 Jean Joel NTEPP
				</div>
			</div>
		</div>	
    </section>  
    <script src="bootstrap/jquery/jquery.js"></script>
    <script src="bootstrap/jquery/script_home2.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery.backstretch.min.js"></script>
    <script type="text/javascript">
	    
	    $(document).ready(function(){
	    	/*
	    	* Utilisons $.ajax pour creer une instance de XmlHttpRequest
	    	*/
	    	var note = 0;
	    	var note1 = 0;
	    	function infoContext(btnSurvole,msgContextuel,hide1,hide2){
	    		$(btnSurvole).mousedown(function(){
	    			$('.mise-en-forme').hide();
	    			$('.option_lecon').hide();
	    			$(hide1).hide();
	    			$(hide2).hide();
	    			$(msgContextuel).fadeIn("slow");
	    			$('.detail').fadeIn("slow");
	    		});
	    	}
	    	infoContext('#lecon1','#option_lecon1','#lecture-lecon1','#exo-lecon1');
	    	infoContext('#lecon2','#option_lecon2','#lecture-lecon2','#exo-lecon2');
	    	infoContext('#lecon3','#option_lecon3','#lecture-lecon3','#exo-lecon3');
	    	infoContext('#lecon4','#option_lecon4','#lecture-lecon4','#exo-lecon4');
	    	infoContext('#preference','#preference_option');
	    	infoContext('#accueil','#c1');
	    	
			function menuLecon(btnClique,msgContextuel){
	    		$(btnClique).on('click',function(e){
	    			e.preventDefault();
	    			$('.details_lecon').hide();
	    			$(msgContextuel).fadeIn("slow");
	    			//$("#lecture-lecon1").hide();
	    			$('.mise-en-forme').fadeIn();
					if(btnClique === "#btn-lecture-lecon1")
						$('#exo-lecon1').hide();
					if(btnClique === "#btn-protocol-lecon2")
						$('#exo-lecon2').hide();
					if(btnClique === "#btn-protocol-lecon3")
						$('#exo-lecon3').hide();
	    		});
	    	}
	    	menuLecon("#btn-lecture-lecon1","#lecture-lecon1");
	    	menuLecon("#btn-lecture-lecon2","#lecture-lecon2");
	    	menuLecon("#btn-lecture-lecon3","#lecture-lecon3");
	    	menuLecon("#btn-lecture-lecon4","#lecture-lecon4");
			
			menuLecon("#btn-protocol-lecon2","#protocol-lecon2");
	    	menuLecon("#btn-protocol-lecon3","#protocol-lecon3");
	    	
	    	function menuExo(btnClique,msgContextuel,hide1){
	    		$(btnClique).on('click',function(e){
	    			e.preventDefault();
					
					$('.details_lecon').hide();
	    			$(msgContextuel).fadeIn("slow");
	    			//$("#lecture-lecon1").hide();
	    			$('.mise-en-forme').fadeIn();
					if(btnClique === "#btn-exo-lecon1")
						$('#lecture-lecon1').hide();
					if(btnClique === "#btn-exo-lecon2")
						$('#protocol-lecon2').hide();
					if(btnClique === "#btn-exo-lecon3")
						$('#protocol-lecon3').hide();
					//alert("voyons voir");
	    		});
	    	}
	    	menuExo("#btn-exo-lecon1","#exo-lecon1","#lecture-lecon1");
	    	menuExo("#btn-exo-lecon2","#exo-lecon2","#lecture-lecon2");
	    	menuExo("#btn-exo-lecon3","#exo-lecon3","#lecture-lecon2");
	    	menuExo("#btn-exo-lecon4","#exo-lecon4","#lecture-lecon2");
			
	    	$("#sidenav01 a").each(function(i) {
	  	      if (i != 0) {
	  	        $("#beep-two").clone().attr("id", "beep-two" + i).appendTo($(this).parent());
	  	      }
	  	      $(this).data("beeper", i);
		    }).mouseenter(function() {
		      	$("#beep-two" + $(this).data("beeper"))[0].play();
		    });
	        $("#beep-two").attr("id", "beep-two0");     
	        
	        $('.carousel').carousel({
	        	pause: true,
	        	interval: false
	        });
	        
	        $(".quizz-lecon1 input").on('click',function(e){
	        	var rep = $(this).attr('class');
	        	$("."+rep.split(' ')[0]).attr("disabled","disabled");
	        	if(note < 20 && rep.split(' ')[1]==='trueAns'){
	        		note+=2;
	        	}
	        	if(note < 10)
        			$('#note1').replaceWith("<span id='note1' style='color:red'><b>0"+note+"/20</b></span>");
        		else
        			$('#note1').replaceWith("<span id='note1' style='color:red'><b>"+note+"/20</b></span>");
	        });
	        $(".quizz-lecon2 input").on('click',function(e){
	        	var rep = $(this).attr('class');
	        	$("."+rep.split(' ')[0]).attr("disabled","disabled");
	        	if(note1 < 16 && rep.split(' ')[1]==='trueAns'){
	        		note1+=parseInt(rep.split(' ')[2]);
	        	}
	        	if(note1 < 10)
        			$('#note2').replaceWith("<span id='note2' style='color:red'><b>0"+note1+"/20</b></span>");
        		else
        			$('#note2').replaceWith("<span id='note2' style='color:red'><b>"+note1+"/20</b></span>");
	        });
	        $(".quizz-lecon3 input").on('click',function(e){
	        	var rep = $(this).attr('class');
	        	$("."+rep.split(' ')[0]).attr("disabled","disabled");
	        	if(note1 < 16 && rep.split(' ')[1]==='trueAns'){
	        		note1+=parseInt(rep.split(' ')[2]);
	        	}
	        	if(note1 < 10)
        			$('#note3').replaceWith("<span id='note3' style='color:red'><b>0"+note1+"/30</b></span>");
        		else
        			$('#note3').replaceWith("<span id='note3' style='color:red'><b>"+note1+"/30</b></span>");
	        });
	        $(".quizz-lecon4 input").on('click',function(e){
	        	var rep = $(this).attr('class');
	        	$("."+rep.split(' ')[0]).attr("disabled","disabled");
	        	if(note1 < 16 && rep.split(' ')[1]==='trueAns'){
	        		note1+=parseInt(rep.split(' ')[2]);
	        	}
	        	if(note1 < 10)
        			$('#note4').replaceWith("<span id='note4' style='color:red'><b>0"+note1+"/20</b></span>");
        		else
        			$('#note4').replaceWith("<span id='note4' style='color:red'><b>"+note1+"/20</b></span>");
	        });
	        
	        function afficherNote(id){
	        	$("#"+id).fadeOut('slow');
	        	$("#"+id).fadeIn('slow');
	        }
	        setInterval(afficherNote,500,'note1');
	        setInterval(afficherNote,500,'note2');
	        setInterval(afficherNote,500,'note3');
	        setInterval(afficherNote,500,'note4');
	        
		    $('.individu').on('click',function(){
		      	var id = $(this).attr("id");
		       	$(".caractere").hide();
		       	$("#indiv"+id).fadeIn('slow');
		    });
		    /*
	        function individuHover(id,remplace){
			    $(id).on('mouseenter',function(e){
			    	$(id+' img').hide();
			      	$(id+' img').replaceWith(remplace)
			    });
	        }
	        individuHover("#31","<img src='bootstrap/img/arbre-genealogique/ligne3/1s.png'/></img>");
	        individuHover("#32","<img src='bootstrap/img/arbre-genealogique/ligne3/2s.png'/></img>");
	        individuHover("#33","<img src='bootstrap/img/arbre-genealogique/ligne3/3s.png'/></img>");
	        individuHover("#34","<img src='bootstrap/img/arbre-genealogique/ligne3/4s.png'/></img>");
	        individuHover("#36","<img src='bootstrap/img/arbre-genealogique/ligne3/5s.png'/></img>");
	        
	        function individuLeave(id,remplace){
			    $(id).on('mouseleave',function(e){
			    	$(id+' img').hide();
			      	$(id+' img').replaceWith(remplace)
			    });
	        }
	        individuLeave("#31","<img src='bootstrap/img/arbre-genealogique/ligne3/1.png'/></img>");
	        individuLeave("#32","<img src='bootstrap/img/arbre-genealogique/ligne3/2.png'/></img>");
	        individuLeave("#33","<img src='bootstrap/img/arbre-genealogique/ligne3/3.png'/></img>");
	        individuLeave("#34","<img src='bootstrap/img/arbre-genealogique/ligne3/4.png'/></img>");
	        individuLeave("#36","<img src='bootstrap/img/arbre-genealogique/ligne3/5.png'/></img>");
	        */
	    });
    </script>
</body>
</html>