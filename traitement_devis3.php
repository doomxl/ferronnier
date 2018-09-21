<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MS Poirier - Devis de rampe & garde-corps</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /><![endif]-->
		<link rel="apple-touch-icon" href="images/favicon.png">
		<!--[if lte IE 8]><script src="./assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="./assets/css/ie8.css" /><![endif]-->
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="no-sidebar>">
	
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header">
				<!-- Inner -->
				<div class="inner all-inners">
					<header>
						<h1><a href="index.php" id="logo">MS Poirier</a></h1>
						<p>Devis de rampe & garde-corps en fer forgé</p>
					</header>
				</div>
				<?php include('include/nav.php'); ?>
			</div>

			<!-- Main -->
				<div class="wrapper style1 devis-wrapper">
					<div class="container devis-container">
					
					<?
						//VARIABLE BASE DE DONNEES
						include("../data.php");
						$rezo="5555";

						//AUTRE VARIABLE
						$thfab=60; // taux horaire de fabrication
						$thpoz=50; // taux horaire de pose
						$cver_d = 45.2; // cout achat verre pour marquise droite
						$cver_dc = 75; // cout achat verre pour marquise droite
						$cver_r = 98.5; // cout achat verre pour marquise droite

						$sendmail = 0;
						$tva = 0; //prix HT by web

						//RECUPERATIONS DES DONNEES
						$titr = $_POST['titr'];
						$nom = $_POST['nom'];
						$mail = $_POST['mail'];
						$tel1 = $_POST['tel1'];
						$tel2 = $_POST['tel2'];
						$rue = $_POST['rue'];
						$codpos = $_POST['codpos'];
						$ville = $_POST['ville'];
						$comment = $_POST['comment'];

						$model = $_POST['model']; //droite, relevee...
						$cat = $_POST['cat']; //simple, classique...
						$dim1 = $_POST['dim1'];//dimension 1 : largeur entre consoles
						$dim2 = $_POST['dim2'];//dimension 2 : avancée
						$poz = $_POST['poz'];

						// Préparation du couple date/heure
						date_default_timezone_set('Europe/Paris');
						$jour = date("Y-m-d");
						$heur = date("H:i:s");

						// Récupération de l'adresse IP
						$add_IP = $_SERVER['REMOTE_ADDR'];

						// determine le support
						$a1= "bureau";
						$mob=0;
						$b1 = $_SERVER['HTTP_USER_AGENT'];

						if (strstr($b1,'Android'))
								   {$a1= "Android";
								   $mob=1;};
						if (strstr($b1,'blackberry'))
								   {$a1= "blackberry";
								   $mob=1;};
						if (strstr($b1,'Windows Phone'))
								   {$a1= "WindowsPho";
								   $mob=1;};
						if (strstr($b1,'symbian'))
								   {$a1= "symbian";
								   $mob=1;};
						if (strstr($b1,'series60'))
								   {$a1= "series60";
								   $mob=1;};
						if (strstr($b1,'palm'))
								   {$a1= "palm";
								   $mob=1;};
						if (strstr($b1,'iPad'))
								   {$a1= "iPad";
								   $mob=2;};
						if (strstr($b1,'iPhone'))
								   {$a1= "iPhone";
								   $mob=1;};
								   
						// Validation de l'adresse e-mail
						if ((filter_var( $mail, FILTER_VALIDATE_EMAIL)) AND ( $mail != '')) $ok=1; 
						else
							{
								$ok=0; 
								?>
								<p>&nbsp;</p>
								<div align="center">
								<p><font size="6">E-mail non valide ou inexistant</font></p>
								<p>&nbsp; </p>
								<p>Impossible de r&eacute;pondre &agrave; votre demande</p>
								<p>Contactez-nous par t&eacute;l&eacute;phone (01 30 04 20 00) ou par mail: <a href="mailto:mspoirier@ferronnier.com">mspoirier@ferronnier.com</a> 
								</p>
								<p>&nbsp;</p>
								<p>&nbsp;</p>		
								<p><font size="5">Vous pouvez aussi reformuler votre demande</font></p>	
								<p><font size="6"> en indiquant un E-mail valide </font></p>
								</div>
								<?
							}
							
						// Validation du modele
						if ($model=="")
							{
							$ok=0;
							?>
						<p>&nbsp;</p>
							<div align="center"><font size="6">Type de marquise ?</font></div>
							<p>&nbsp;</p>
							<p align="center">Vous n'avez pas choisi votre mod&egrave;le</p>
							<p align="center">Merci de nous indiquer si vous souhaitez une marquise Droite, Relev&eacute;e ou Demi-cercle</p>
							<?
							}

						// Validation de la largeur
						settype($dim1, "integer"); 
						if ($model=="droite") $lgmax=1500;
							else $lgmax=350;
						if (($dim1<80) or ($dim1>$lgmax))
							{
							$ok=0;
							?>
						<p>&nbsp;</p>
							<div align="center"><font size="6">Largeur non valide</font></div>
							<p>&nbsp;</p>
							<p align="center">Cette distance doit &ecirc;tre superieure &agrave; 80cm et inferieure &agrave; 350cm (sauf pour les marquises droites jusqu'&agrave; 15m) </p>
							<?
							}
							
						// Validation de l'avancee
						settype($dim2, "integer"); 
						if ($model=="droite") {$avmax=350;}
							else {$avmax=$dim1;}
						if (($dim2<80) or ($dim2>$avmax))
							{
							$ok=0;
							?>
							<p>&nbsp;</p>
							<div align="center"><font size="6">Avanc&eacute;e non valide</font></div>
							<p>&nbsp;</p>
							<p align="center">Cette distance doit &ecirc;tre superieure &agrave; 80cm et, selon nous, inferieure &agrave; la largeur entre consoles (sauf pour les marquises droites maxi 3m50) </p>
							<?
							}

						if ($ok==1)
							{
							$avfab = $dim2;
							// type de console
							$typ = 8; // console classique
							if ($cat=='simple') $typ=4;
							if ($cat=='baroque') $typ=16;
							
							// prix de pose
							if ($dim1<150) $cpoz=15*$thpoz; else $cpoz=($dim1/10)*$thpoz;
							
							// dimension du verre pour marquise droite
							$nver = round($dim1*10/(200+$dim2)+2); //nombre de verre
							$lgver = round($dim1*10/($nver-2)); // largeur reelle
							$sver = max(0.45, ($lgver*$dim2/100000)); //surface d'achat	
							
							if ($model=="droite")	
								{	
								//Cout du verre	
								$cver = round($nver*$sver*$cver_d*2); //prix de vente du verre
								$cpozver = round($nver*$thpoz*0.67); //prix de pose du verre		
								//Cout de fabrication (temps de fabrication 23.5h)
								$cmarq = 0;
								if ($nver>6) $cmarq = ($nver-6)*$thfab;		
								$cmarq = round($cmarq+(23.5+$typ)*$thfab);		 
								}
								
							if ($model=="relevee")
								{
								//Cout du verre
								$nver = round($dim1/17); //nombre de verre
								$cver = round($nver*$sver*$cver_r*2); //prix de vente du verre
								$cpozver = round($nver*$thpoz); //prix de vente du verre		
								//Cout de fabrication (temps de fabrication 45h)
								$cmarq = 0;
								if ($nver>6) $cmarq = ($nver-6)*$thfab;		
								$cmarq = round($cmarq+(45+$typ)*$thfab);				
								}
						 
							if ($model=="demi-cercle")
								{
								//calcul de l'avancée
								$avfab = floor(($dim1/2)+20);	
								if ($dim2<$avfab+17) $ndc = 0;
									else
									{if ($dim2<$avfab+53) 
										{
										$avfab = $avfab+35;
										$ndc = 2;
										}
										else 
										{
										$avfab = $avfab+70;
										$ndc = 4;
										}
									}
								//Cout du verre	
								$nver = round($dim1/20)+$ndc; //nombre de verre	
								$cver = round($nver*$sver*$cver_dc*2); //prix de vente du verre
								$cpozver = round($nver*$thpoz*0.67); //prix de vente du verre		
								//Cout de fabrication (temps de fabrication 30h)
								$cmarq = 0;
								if ($nver>6) $cmarq = ($nver-6)*$thfab;		
								$cmarq = round($cmarq+(30+$typ)*$thfab);	
								}	
								
							if ($poz==1)
							{
							$c= $cmarq+$cpoz+$cver+$cpozver;
							}
							else
							{
							$c= $cmarq+$cver;
							$cttc= round($c*1.2);
							settype($cttc, "integer");
							}
							
							//Creation du texte mail 
							$coor=$titr." ".$nom;
							if ($rue!="") $coor=$coor."\n".$rue;
							if ($ville!="") $coor=$coor."\n".$codpos." ".$ville;
							if ($tel1!="") $coor=$coor."\n".$tel1;
							if ($tel2!="") $coor=$coor."\n".$tel2;
							if ($comment!="") $coor=$coor."\n".$comment;	
							$cacal=$cmarq." - ".$cpoz." - ".$cver." - ".$cpozver;
							
							$tt1="Le prix d'une Marquise ".$model." s'avançant de ".$avfab." cm du mur, avec des consoles ".$cat."s espacées de ".$dim1." cm, ";
							if ($poz==1)
								$tt2="posée en Ile de France est de ".$c." euros HT, compris le vitrage arrondi sur l'extrémité.";
							else
								$tt2="départ atelier est de ".$cttc." euros TTC, compris le vitrage arrondi sur l'extrémité.";	
										
							$tt="Merci de nous avoir contacté pour votre projet.\n\n";
							
							$tt=$tt.$tt1.$tt2;
							$tt3="\n\nNos marquises sont entièrement conçues dans notre atelier d'Ecquevilly (78).\nNos consoles respectent les principes d'un ouvrage de ferronnerie réussi:\n";	
							$tt3=$tt3."\nLe DESSIN est réalisé selon votre configuration et soumis à votre acceptation";
							$tt3=$tt3."\nLa FERRONNERIE est forgée dans notre atelier en suivant scrupuleusement votre dessin";
							$tt3=$tt3."\nL'ESTHETIQUE vient alors principalement du soin que nous apportons aux finitions";
							$tt5="\n\nPour vérifier ces atouts, n'hésitez pas à nous rendre visite (sur rendez-vous)";	
							
							$tt=$tt.$tt3.$tt5;
								
							//Création du texte pour l'agenda
							$nom_a=$nom;
							if($nom=="") $nom_a="Anonyme";
							$texta="Marquise ".$model." ".$typ." largeur entre consoles: ".$dim1.", avec une avancée retenue de ".$avfab." cm.";
								
							//CONNEXION A LA BASE DE DONNEES
							/**
							@MYSQL_CONNECT ("$dbserver","$dbuser","$dbpass") or die ("<p>Erreur: la base de donn&eacute;es est momentanément inaccessible.<br>Votre demande n'a pu être enregistrée, nous sommes désolés  pour cet incident.</p>");
							mysql_select_db("$dbdb");

							$Q_demand="INSERT INTO demand (nom,jour,heur,objet,modele,type,d1,d2,pose,tva,dp,prix_ht,email,tel1,tel2,titr,rue,code,ville,description,journal,support,ipvisit,ecran,send) 
								VALUES ('$nom','$jour','$heur','M','$model','$typ','$dim1','$avfab','$poz','$tva','$dim2','$c','$mail','$tel1','$tel2','$titr','$rue','$codpos','$ville','$comment','web','$a1','$add_IP','$rezo','$sendmail')";													
							$Rd=mysql_query($Q_demand);
							$Rid = mysql_insert_id();
												
							$Q_agenda="INSERT INTO agenda (nom,jour,heur,description,code,categorie,titr,prenom,email,tel1,tel2,retour,url,user,id_user,actif) VALUES ('$nom_a','$jour','$heur','$texta','$codpos','4','$titr','','$mail','$tel1','$tel2','','','$Rid','0','1')";
							$Ra=mysql_query($Q_agenda);
							
							mysql_close();

							// Envoi du mail
							mail("mspoirier@ferronnier.com","Dmarq","$jour $heur\n$cacal\n$nver $sver\n$coor\n$mail\n$tt","From: mspoirier@ferronnier.com\nReply-To: mspoirier@ferronnier.com"); 
							// Affichage des informations saisies
							*/
							?>		
							<table width="100%" border="0" id="Rampe d'escalier en fer forg&eacute; style moderne" >
						  <tr>
							<td>&nbsp;</td>
							<td width="200" ><a href="index.php"><font color="#AAAAAA" size="5">www.ferronnier.com</font></a></td>
							<td >&nbsp;</td>
							<td width="340" align="center" ><a href="mspoirier.htm"><font color="#AAAAAA" size="4"> </font></a></td>
							<td >&nbsp;</td>
							<td width="230"><a href="mspoirier.php"><font color="#AAAAAA" size="4">MS Poirier - Ferronnier</font></a></td> 
							<td >&nbsp;</td>
							<td width="160" ><a href="devis.htm"><font size="5">Autre devis</font></a></td>
						  </tr>
						  <tr>
							<td  colspan="8" align="center"><font color="#FFFFFF" size="5">Transmission r&eacute;ussie</font></td>
						  </tr>
						</table>
						<p>&nbsp;</p>
							<?
							echo " Vous avez choisi une marquise $model $p_cat <br>";
							echo " dimensions (largeur x avanc&eacute;e) : $dim1 x $dim2 en cm<br>";
							if ($poz==1) echo " pos&eacute;e en ile de France <br><br>"; else echo "sans pose <br><br>";
							echo " Nous enverrons votre devis &agrave; l'adresse E-mail : $mail <br>";
							?>
							<p>&nbsp;</p>
							<p align="center"><a href="javascript:history.go(-1)">Choisir un autre mod&egrave;le ou modifier votre demande</a></p>
							<?
						}	
						else 
						{
							?>
							<p>&nbsp;</p>
							<p align="center"><a href="javascript:history.go(-1)">Retour</a></p>
							<?
						}
						?>	
					</div>
				</div>

			<?php include('include/footer.php'); ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery-3.3.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

			<!--script src="assets/js/jquery.min.js"></script-->
			<script>jQuery.fn.load = function(callback){ $(window).on("load", callback) };</script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
				
				<?php
					if(isset($_GET['modele'])) {
						echo('$("#modele").val("'.urldecode($_GET['modele']).'");');
					}
				?>
				
				//$("#modele").val("Art-Deco Bronze");
			
				$(function () {
				  $('[data-toggle="tooltip"]').tooltip();
				  $('#navButton > a').attr('href', 'devis.php');
				  $('#defaultpanel').hide();
				  $('a').attr('rel', 'external');
				})
			</script>
	</body>
</html>