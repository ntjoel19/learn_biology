<%@ page language="java" contentType="text/html; charset=utf-8"
    pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel='stylesheet' type='text/css' href='./bootstrap/css/bootstrap.min.css'/>
	<link rel='stylesheet' type='text/css' href='./bootstrap/css/style.css'/>
	<link rel='stylesheet' type='text/css' href='./bootstrap/css/jquery-ui.css'/>
	<link rel='stylesheet' type='text/css' href='./bootstrap/css/font-awesome.min.css'/>
	<link rel="stylesheet" type="text/css" href='./bootstrap/css/juizDropDownMenu.css'/>
	<link rel="stylesheet" type="text/css" href='./bootstrap/css/style-main-left-menu.css'/>
    <title>Experience laboratoire</title>
    <script src="./bootstrap/jquery/jquery.js"></script>
	<script type="text/javascript">
		function allowDrop(ev){
			ev.preventDefault();
		}
		function drag(ev){
			ev.dataTransfer.setData("Text",ev.target.id);
		}
		function drop(ev){
			ev.preventDefault();
			var data = ev.dataTransfer.getData("Text");
			//alert($("#"+data).html());
			ev.target.appendChild(document.getElementById(data));
			
		}
    </script>
	<style type="text/css">
     /* Style pour l'exemple*/
     
      audio,.icone{
     	display:none;
     }
      #menu-top,#footer,#entete_resultats{
      	line-height : 100px;
      	border-radius : 5px;
      	background: #dbdbdb url(../ressources/main.png) repeat-x scroll 0 0;  
		background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #d4d4d4),color-stop(1, #e6e6e6));
		background: -webkit-linear-gradient(center bottom , #d4d4d4 0%, #e6e6e6 100%) repeat scroll 0 0 #dbdbdb;  
		background: -moz-linear-gradient(center bottom , #d4d4d4 0%, #e6e6e6 100%) repeat scroll 0 0 #dbdbdb;
		margin-top:10px;
		border: 1px solid #c0c0c0;
      }
      #zone-de-travail{
      	line-height : 500px;
      	border-radius : 5px;
      	/*background-color: #f8f8f8;*/
      	border: 1px solid #c0c0c0;
      	margin-top:5px;
      }
      #option-doutil{
      	border-radius : 5px;
      	border: 1px solid #c0c0c0;
      	margin-top:5px;
      }
      .ligne-carreau div{
      	border-radius : 5px;
      	border: 1px solid #c0c0c0;
      }
      
      .no-border, .no-border div{
      	border: none;
      }
      #footer{
      	line-height : 40px;
      	border-radius : 5px;
      	background: #dbdbdb url(../ressources/main.png) repeat-x scroll 0 0; 
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
      }
      .btn-home:hover{
		  background: #497d94;
      }
      .option_lecon{
      	background : #fff
      }
      #ligne1 div{
      	border-radius : 5px;
      	border: 1px solid #c0c0c0;
      }
      #ligne2 div{
      	border-radius : 5px;
      	border: 1px solid #c0c0c0;
      }
      #ligne3 div{
      	border-radius : 5px;
      	border: 1px solid #c0c0c0;
      }
      #ligne4 div{
      	border-radius : 5px;
      	border: 1px solid #c0c0c0;
      }
      #ligne5 div{
      	border-radius : 5px;
      	border: 1px solid #c0c0c0;
      }
      #ligne6 div{
      	border-radius : 5px;
      	border: 1px solid #c0c0c0;
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
</head>
<body>
	<% 
		String showFalse=(String)request.getAttribute("showFalse"); 
		String caryotype = "";
		String groupe_sanguin = "";
		String script = "";
		if(showFalse.equals("caryotype")){
			script="<script src='./bootstrap/js/script-labo2.js'></script>";
		}else{
			script = "<script src='./bootstrap/js/script-labo.js'></script>";	
		}
	%>
	
	<section id='entete'>
    	<jsp:include page='/entete_labo.jsp' />	
    </section> 
    
    <div class="container">
		<div class="row">
		    <section id='outils'>
		    	<jsp:include page='/outil_labo.jsp' />	
		    </section>
		    <div class="col-sm-10 col-md-10 col-lg-10">
		    	<div class="row" id='option-doutil'>
		    		<section id='option_outils'>
					   	<jsp:include page='/option_outil.jsp' />	
					</section>
		    	</div>
		    	<div class="row paillace" style='background:#fff;'>
		    		<div class="col-sm-12 col-md-12 col-lg-12" id='zone-de-travail'>
		    			<div class="row ligne-carreau">
		    				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 c3">
		    					<div class='row no-border'>
		    						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				    					<div class="btn-group-vertical" style='margin-left:0px;'>
										  <button type="button" class="btn btn-primary btn-tube-init"><i class='fa fa-refresh'></i></button>
										</div>
									</div>
		    						<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8' class='tube_utilise' id='tube_utilise'>
				    					<img src='./bootstrap/img/icones/tube_essai_vide_gr.png' class='tube_essai' id='tb_vide'/>
				    					<img src='./bootstrap/img/icones/tube_essai_bleu_gr0.png' class='tube_essai' id='tb_bleu0' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_bleu_gr1.png' class='tube_essai' id='tb_bleu1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_bleu_gr2.png' class='tube_essai' id='tb_bleu2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_jaune_gr0.png' class='tube_essai' id='tb_jaune0' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_jaune_gr1.png' class='tube_essai' id='tb_jaune1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_jaune_gr2.png' class='tube_essai' id='tb_jaune2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_rouge_gr0.png' class='tube_essai' id='tb_rouge0' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_rouge_gr1.png' class='tube_essai' id='tb_rouge1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_rouge_gr2.png' class='tube_essai' id='tb_rouge2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_rouge_clair_gr1.png' class='tube_essai' id='tb_rouge_clair1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_rouge_clair_gr2.png' class='tube_essai' id='tb_rouge_clair2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_rouge_jaune_gr1.png' class='tube_essai' id='tb_rouge_jaune1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_rouge_jaune_gr2.png' class='tube_essai' id='tb_rouge_jaune2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_violet_gr0.png' class='tube_essai' id='tb_violet0' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_violet_gr1.png' class='tube_essai' id='tb_violet1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_violet_gr2.png' class='tube_essai' id='tb_violet2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_transp_gr0.png' class='tube_essai' id='tb_transp0' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_transp_gr1.png' class='tube_essai' id='tb_transp1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_transp_gr2.png' class='tube_essai' id='tb_transp2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/tube_essai_interdit_gr.png' class='tube_essai' id='tb_interdit' style='display:none'/>
		    						</div>
		    					</div>
		    				</div>
		    				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 c4">
		    					<div class='row no-border'>
				    				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				    					<div class="btn-group-vertical" style='margin-left:0px;'>
										  <button type="button" class="btn btn-primary btn-flacon-tri"><i class='fa fa-flask'></i></button>
										  <button type="button" class="btn btn-primary btn-flacon-ballon"><img alt="" src="./bootstrap/img/icones/ico_ballon.png"></button>
										  <button type="button" class="btn btn-primary btn-flacon-init"><i class='fa fa-refresh'></i></button>
										</div>
									</div>
									<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8' class='flacon_utilise' id='flacon-tri'>
				    					<img src='./bootstrap/img/icones/flacon_conique_vide.png' class='flacon_conique' id='flacon_tri_vide'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_bleu_gr0.png' class='flacon_conique flacon' id='flc_bleu0' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_bleu_gr1.png' class='flacon_conique flacon' id='flc_bleu1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_bleu_gr2.png' class='flacon_conique flacon' id='flc_bleu2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_jaune_gr0.png' class='flacon_conique flacon' id='flc_jaune0' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_jaune_gr1.png' class='flacon_conique flacon' id='flc_jaune1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_jaune_gr2.png' class='flacon_conique flacon' id='flc_jaune2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_rouge_gr0.png' class='flacon_conique flacon' id='flc_rouge0' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_rouge_gr1.png' class='flacon_conique flacon' id='flc_rouge1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_rouge_gr2.png' class='flacon_conique flacon' id='flc_rouge2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_rouge_jaune_gr1.png' class='flacon_conique flacon' id='flc_rouge_jaune1' style='display:none'/>
				    					
				    					<img src='./bootstrap/img/icones/flacon_conique_rouge_jaune_gr2.png' class='flacon_conique flacon' id='flc_rouge_jaune2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_vert_gr.png' class='flacon_conique flacon' id='flc_vert' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_violet_gr0.png' class='flacon_conique flacon' id='flc_violet0' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_violet_gr1.png' class='flacon_conique flacon' id='flc_violet1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_violet_gr2.png' class='flacon_conique flacon' id='flc_violet2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_transp_gr0.png' class='flacon_conique flacon' id='flc_transp0' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_transp_gr1.png' class='flacon_conique flacon' id='flc_transp1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_transp_gr2.png' class='flacon_conique flacon' id='flc_transp2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_rouge_clair_gr_plein.png' class='flacon_conique flacon' id='flc_rouge_clair_plein' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_rouge_clair_gr1.png' class='flacon_conique flacon' id='flc_rouge_clair1' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_conique_rouge_clair_gr2.png' class='flacon_conique flacon' id='flc_rouge_clair2' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_interdit_gr.png' class='flacon_conique flacon' id='flc_interdit' style='display:none'/>
				    				</div>
				    				<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8' class='flacon_utilise' id='flacon-ballon' style='display:none;'>
				    					<img src='./bootstrap/img/icones/flacon_spherique_vide.png' class='flacon_spherique flacon'/>
				    					<img src='./bootstrap/img/icones/flacon_spherique_bleu_gr.png' class='flacon_spherique flacon' id='fls_bleu' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_spherique_jaune_gr.png' class='flacon_spherique flacon' id='fls_jaune' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_spherique_rouge_gr.png' class='flacon_spherique flacon' id='fls_rouge' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_spherique_vert_gr.png' class='flacon_spherique flacon' id='fls_vert' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_spherique_violet_gr.png' class='flacon_spherique flacon' id='fls_violet' style='display:none'/>
				    					<img src='./bootstrap/img/icones/flacon_spherique_interdit.png' class='flacon_conique flacon' id='fls_interdit' style='display:none'/>
				    				</div>
								</div>
		    				</div>
		    				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 c1">
		    					<div class='row no-border'>
				    				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				    					<div class="btn-group-vertical" style='margin-left:0px;'>
										  <button type="button" class="btn btn-primary" id='camera'><i class='fa fa-camera'></i></button>
										  <button type="button" class="btn btn-primary">Z</button>
										  <button type="button" class="btn btn-primary btn-microsc-init"><i class='fa fa-refresh'></i></button>
										</div>
									</div>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				    					<img src='./bootstrap/img/icones/microscope_grand.png' class='microscope' id='microsc_vide'/>
				    					<img src='./bootstrap/img/icones/microscope+lame_grand.png' class='microscope' id='microsc-ready' style='display:none;'/>
				    					<img src='./bootstrap/img/icones/microscope+lame_violet_grand.png' class='microscope' id='microsc-ready_violet' style='display:none;'/>
				    				
				    				</div>
								</div>
		    				</div>
		    				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 c2">
		    					<div class='row no-border'>
		    						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				    					<div class="btn-group-vertical" style='margin-left:0px;'>
										  <button type="button" class="btn btn-primary btn-lame-init"><i class='fa fa-refresh'></i></button>
										</div>
									</div>
				    				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				    					<img src='./bootstrap/img/icones/lame_grand.png' class='lame_grand' id='lam_vide'/>
				    					<img src='./bootstrap/img/icones/lame_grand_bleu.png' class='lame_grand' id='lam_bleu' style='display:none'/>
						    			<img src='./bootstrap/img/icones/lame_grand_jaune.png' class='lame_grand' id='lam_jaune' style='display:none'/>
						    			<img src='./bootstrap/img/icones/lame_grand_rouge.png' class='lame_grand' id='lam_rouge' style='display:none'/>
						    			<img src='./bootstrap/img/icones/lame_grand_vert.png' class='lame_grand' id='lam_vert' style='display:none'/>
						    			<img src='./bootstrap/img/icones/lame_grand_violet.png' class='lame_grand' id='lam_violet' style='display:none'/>
						    			<img src='./bootstrap/img/icones/lame_grand_serum.png' class='lame_grand' id='lam_transp' style='display:none'/>
						    			<img src='./bootstrap/img/icones/lame_grand_interdit.png' class='lame_grand' id='lam_interdit' style='display:none'/>
		    						</div>
		    					</div>
		    				</div>
				    		<div class="col-sm-12 col-md-12 col-lg-12" id='zone_resultat'>
				    			<div class='row no-border'>
				    				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				    					<div class="sidebar-nav">
				  							<div class="navbar navbar-default" role="navigation">
											    <div class="navbar-collapse collapse sidebar-navbar-collapse">
											      <ul class="nav navbar-nav" id="sidenav01">
											        <li class="active">
											          <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="cellule-reactif collapsed">
												          Zones des résultats
											          </a>
											        </li>
											      </ul>
											    </div>
											 </div>
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				    					<ul class="nav nav-tabs">
									        <li class="active"><a data-toggle="tab" href="#sectionA">Resultats</a></li>
									        <li><a data-toggle="tab" href="#sectionB">Actions</a></li>
									    </ul>
									    <div class="tab-content">
        									<div id="sectionA" class="tab-pane fade in active">
        										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"  id='result' style="border:1px solid #c0c0c0;height:300px;">
							    					<div class='row no-border' id='caryo_garcon_sein' class='resulta_cam' style='display:none;'>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
							    							&nbsp;
							    						</div>
							    						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6' id='caryo_garc_sein' ondrop='drop(event)' ondragover='allowDrop(event)' style='border-radius:1000px;'>
							    							
							    						</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
							    							&nbsp;
							    						</div>
							    					</div>
							    					<div class='row no-border' id='caryo_fil_seine' class='resulta_cam' style='display:none;' >
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
							    							&nbsp;
							    						</div>
							    						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6' id='caryo_fille_seine' ondrop='drop(event)' ondragover='allowDrop(event)' style='border-radius:1000px;'>
							    							
							    						</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
							    							&nbsp;
							    						</div>
							    					</div>
							    					<div class='row no-border' id='caryo_trisomie21' class='resulta_cam' style='display:none;'>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
							    							&nbsp;
							    						</div>
							    						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6' id='caryo_trisomi_21' ondrop='drop(event)' ondragover='allowDrop(event)' style='border-radius:1000px;'>
							    							
							    						</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
							    							&nbsp;
							    						</div>
							    					</div>
							    					<div class='row no-border' id='caryo_kleinefelter' class='resulta_cam' style='display:none;'>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
							    							&nbsp;
							    						</div>
							    						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6' id='caryo_kleinefelt' ondrop='drop(event)' ondragover='allowDrop(event)'>
							    							
							    						</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
							    							&nbsp;
							    						</div>
							    					</div>
							    					<div class='row no-border' id='caryo_vierge' class='resulta_cam' style='display:none;'>
							    						<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6' style="background-image:#f8f8f8 url('././bootstrap/img/experience/bg_result_inexploit.png');" id='caryo_rien' ondrop='drop(event)' ondragover='allowDrop(event)'>
							    							
							    						</div>
							    					</div>
							    				</div>
							    				<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 schema_caryo' style='border:1px solid #c0c0c0;display:none;' id='bravo'>
							    					<img src='./bootstrap/img/gif/bravoo.gif' width='100%' height='100%'/>
							    				</div>
							    				<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 schema_caryo' style='border:1px solid #c0c0c0;display:none;' id='echec'>
							    					<img src='./bootstrap/img/experience/bg_result_erone.png' width='100%' height='100%'/>
							    				</div>
							    				<div class='col-xs-12 col-sm-6 col-md-5 col-lg-5 schema_caryo' style='border:1px solid #c0c0c0;' id='schema_caryo'>
							    					<div class='row no-border' id="ligne1">
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr1' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr2' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr3' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr4' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    					</div>
							    					<div class='row no-border' id="ligne2">
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr5' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr6' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr7' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr8' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    					</div>
							    					<div class='row no-border' id="ligne3">
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr9' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr10' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr11' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr12' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    					</div>
							    					<div class='row no-border' id="ligne4">
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr13' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr14' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr15' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr16' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    					</div>
							    					<div class='row no-border' id="ligne5">
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr17' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr18' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr19' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr20' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    					</div>
							    					<div class='row no-border' id="ligne6">
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr21' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr22' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr23' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    						<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3' id='case_chr24' ondrop='drop(event)' ondragover='allowDrop(event)'>&nbsp;</div>
							    					</div>
							    					<div class='row no-border' >
							    						<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12' id="ranger" style='display:none;'>
							    							<button type="button" id="btn_ranger" class="btn btn-primary">Ranger</button>
							    						</div>
							    					</div>
							    				</div>
							    				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" id='choice'>
							    					<div class='row no-border tp1'>
							    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							    							<div class="radio">
															  <label><input type="radio" id='masc_normal' name="optradio">Garcon sain</label>
															</div>
															<div class="radio">
															  <label><input type="radio" id='fem_normal' name="optradio">Fille saine</label>
															</div>
															<div class="radio">
															  <label><input type="radio" id='masc_fem_kleinfelter' name="optradio">Kleinefelter</label>
															</div>
															<div class="radio">
															  <label><input type="radio" id='masc_trisomi_21' name="optradio">Trisomie 21</label>
															</div>
							    						</div>
							    					</div>
							    				</div>
        									</div>
        									<div id="sectionB" class="tab-pane fade">
        										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							    					<div class='row no-border'>
							    						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							    							<textarea class="form-control" rows="12" id="consol" editable='false'></textarea>
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
		    	</div>
		    </div>
		    
		    <section id='serum'>
		    	<jsp:include page='/reactifs_labo.jsp' />	
		    </section>
		</div>
	</div>
    <section id='entete'>
    	<jsp:include page='/pieds_de_page.jsp' />	
    </section>
    <script src="./bootstrap/jquery/jquery-ui.js"></script>
    <script src="./bootstrap/jquery/jquery.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/jquery.backstretch.min.js"></script>
    <script src="./bootstrap/js/script-labo.js"></script>
</body>
</html>