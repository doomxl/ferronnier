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


							//VARIABLE COUT DE TRANSPORT
							$cdmax=1900;   // cout deplacement +5 h de trajet aller
							$cd1=200;      // entre 1 et 2h
							$cd2=350;      // entre 2 et 3h
							$cd3=750;	   // entre 3 et 4h
							$cd4=1350;	   // entre 4 et 5h

							//AUTRE VARIABLE
							$sendmail = 0;
							$tva = 0; //prix HT by web
							$dep_ok = 500; //le deplacement est il viable?

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

							$model = $_POST['model'];
							$mc = $_POST['mc'];
							$dim1 = $_POST['dim1'];//dimension 1 : longueur en cm
							$typesca = $_POST['typesca'];
							$formesca = $_POST['formesca'];

							//$rezo=(isset($_REQUEST['rezo'])) ? $_REQUEST['rezo'] : Null;
							$rezo="5555";

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

							// Validation du code postal
							settype($codpos, "integer"); 
							if ($codpos==0) $codpos=99999;
							$dept=floor($codpos/1000);
							if ($dept<1) $dept=100;
							if ($dept>99)
							{
								$ok=0;
								?>
								<p>&nbsp;</p>
								<div align="center"><font size="6">code postal non valide</font></div>
								<p>&nbsp;</p>
								<p align="center">Le code postal doit être un nombre de 5 chiffres</p>
								<p>&nbsp;</p>
								<p align="center"><font size="5">Merci de reformuler votre demande</font></p>
								<?
							}

							// Validation de la longueur 
							settype($dim1, "integer"); 
							if ($dim1<50)
								{
								$ok=0;
								?>
								<p>&nbsp;</p>
								<div align="center"><font size="6">Longueur non valide</font></div>
								<p>&nbsp;</p>
								<p align="center">La longueur doit &ecirc;tre en chiffres exclusivement, ne pas inscrire de 
								caract&egrave;re du type (cm, + ,...)</p>
								<p align="center">Il faut totaliser la longueur des rampes (en oblique) et celle des gardes corps (horizontale)</p>	
								<p align="center">l'unit&eacute; est le centim&egrave;tre, pour une longueur de 
								7m50, inscrire 750</p>
								<p align="center">Enfin il faut un minimum de 50 cm</p>
								<p>&nbsp;</p>
								<p align="center"><font size="5">Merci de reformuler votre demande</font></p>
								<?
								}
								
							// Validation du modele
							 if ($model=="Modele")
								{
								$ok=0;
								?>
								<p>&nbsp;</p>
								<div align="center"><font size="6">Choix du mod&egrave;le</font></div>
								<p>&nbsp;</p>
								<p align="center">Vous n'avez pas choisi votre mod&egrave;le</p>
								<p align="center">Pour voir nos ouvrages : <a href="rampe.htm">Voir</a></p>	
								<p>&nbsp;</p>
								<p align="center"><font size="5">Merci de reformuler votre demande</font></p>
								<?
								}
								
							// Validation de la main courante
							 if ($mc=="Modele")
								{
								$ok=0;
								?>
								<p>&nbsp;</p>
								<div align="center"><font size="6">Choix de la main courante</font></div>
								<p>&nbsp;</p>
								<p align="center">Vous n'avez pas choisi la mati&egrave;re de la main courante</p>
								<p align="center">Celle ci peut etre en fer, en laiton brillant, en laiton vielli, ou encore en bois</p>	
								<p>&nbsp;</p>
								<p align="center"><font size="5">Merci de reformuler votre demande</font></p>
								<?
								}	
								
							// Validation du type
							 if ($typesca=="")
								{
								$ok=0;
								?>
								<p>&nbsp;</p>
								<div align="center"><font size="6">Type d'escalier</font></div>
								<p>&nbsp;</p>
								<p align="center">Vous n'avez pas renseign&eacute; la forme de votre escalier</p>
								<p align="center">Celle ci est indispensable pour faire votre devis</p>	
								<p>&nbsp;</p>
								<p align="center"><font size="5">Merci de pr&eacute;ciser votre demande</font></p>
								<?
								}

							// DEBUT DES CALCULS
							if ($ok==1)
								{
								// Reconnaissance du débillardage
								$deb = 1;
								if ($typesca=="0") $deb=0;
								if ($typesca=="4") $deb=0;

								//Définition de la forme de l'escalier
								$ft = "GC";
								if ($typesca=="0") $ft="droit";
								if ($typesca=="1") $ft="1/4";
								if ($typesca=="2") $ft="2/4";
								//if ($typesca=="3") $ft="VS"; choix VS abandonné en 2018
								
								// Tarif des Modeles
								$cmod=100000;
								if ($model=="Art-Deco") $cmod=880;
								if ($model=="Art-Deco III") $cmod=670;
								if ($model=="Art-Deco Bronze") $cmod=880;
								if ($model=="Art-Nouveau") $cmod=1180;
								if ($model=="Bateau") $cmod=670;
								if ($model=="Barreau carre") $cmod=450;
								if ($model=="Barreau rond") $cmod=570;
								if ($model=="Bouquet") $cmod=1250;
								if ($model=="Charles VIII") $cmod=1180;
								if ($model=="Croisade") $cmod=790;
								if ($model=="Directoire") $cmod=670;
								if ($model=="Francois I") $cmod=1250;
								if ($model=="Gaspard II") $cmod=1320;
								if ($model=="Gothique") $cmod=790;
								if ($model=="Henri III") $cmod=1350;
								if ($model=="Henri IV") $cmod=1250;
								if ($model=="Louis XIV") $cmod=1500;
								if ($model=="Louis XV") $cmod=1250;
								if ($model=="Louis XVI") $cmod=1250;
								if ($model=="Rayon de Soleil") $cmod=670;
								if ($model=="Roman") $cmod=670;
								if ($model=="Saint Barthelemy") $cmod=790;
								if ($model=="Saint Eloi") $cmod=880;
								if ($model=="Surrealiste") $cmod=670;
								if ($model=="Vogue") $cmod=670;	
									
								// Cout deplacement	
								$cd=$cdmax; // cout deplacement max en France

								//moins d'1 heure de trajet
								if ($dept==75) $cd=0;
								if ($dept==78) $cd=0;
								if ($dept==91) $cd=0;
								if ($dept==92) $cd=0;
								if ($dept==93) $cd=0;
								if ($dept==94) $cd=0;
								if ($dept==95) $cd=0;

								// entre 1 et 2h
								if ($dept==27) $cd=$cd1;
								if ($dept==28) $cd=$cd1;
								if ($dept==60) $cd=$cd1;
								if ($dept==77) $cd=$cd1;

								// entre 2 et 3h
								if ($dept==2) $cd=$cd2;
								if ($dept==14) $cd=$cd2;
								if ($dept==41) $cd=$cd2;
								if ($dept==45) $cd=$cd2;
								if ($dept==61) $cd=$cd2;
								if ($dept==72) $cd=$cd2;
								if ($dept==76) $cd=$cd2;
								if ($dept==80) $cd=$cd2;

								// entre 3 et 4h
								if ($dept==8) $cd=$cd3;
								if ($dept==10) $cd=$cd3;
								if ($dept==18) $cd=$cd3;
								if ($dept==21) $cd=$cd3;
								if ($dept==35) $cd=$cd3;
								if ($dept==36) $cd=$cd3;
								if ($dept==37) $cd=$cd3;
								if ($dept==49) $cd=$cd3;
								if ($dept==50) $cd=$cd3;
								if ($dept==51) $cd=$cd3;
								if ($dept==52) $cd=$cd3;
								if ($dept==53) $cd=$cd3;
								if ($dept==55) $cd=$cd3;
								if ($dept==58) $cd=$cd3;
								if ($dept==59) $cd=$cd3;
								if ($dept==62) $cd=$cd3;
								if ($dept==86) $cd=$cd3;
								if ($dept==89) $cd=$cd3;

								// entre 4 et 5h
								if ($dept==1) $cd=$cd4;
								if ($dept==3) $cd=$cd4;
								if ($dept==15) $cd=$cd4;
								if ($dept==16) $cd=$cd4;
								if ($dept==17) $cd=$cd4;
								if ($dept==19) $cd=$cd4;
								if ($dept==22) $cd=$cd4;
								if ($dept==23) $cd=$cd4;
								if ($dept==24) $cd=$cd4;
								if ($dept==25) $cd=$cd4;
								if ($dept==29) $cd=$cd4;
								if ($dept==39) $cd=$cd4;
								if ($dept==42) $cd=$cd4;
								if ($dept==43) $cd=$cd4;
								if ($dept==44) $cd=$cd4;
								if ($dept==46) $cd=$cd4;
								if ($dept==54) $cd=$cd4;
								if ($dept==56) $cd=$cd4;
								if ($dept==57) $cd=$cd4;
								if ($dept==63) $cd=$cd4;
								if ($dept==67) $cd=$cd4;
								if ($dept==68) $cd=$cd4;
								if ($dept==69) $cd=$cd4;
								if ($dept==70) $cd=$cd4;
								if ($dept==71) $cd=$cd4;
								if ($dept==79) $cd=$cd4;
								if ($dept==85) $cd=$cd4;
								if ($dept==87) $cd=$cd4;
								if ($dept==88) $cd=$cd4;
								if ($dept==90) $cd=$cd4;	
										
								// Coef pour moduler les petites longueurs avec qq longueur en metre
								$qq=$dim1/100;	
								$modulo=0;
								if ($dim1<700)
									{
									$modulo = (700-$dim1)/2;
									if ($deb==0) $modulo=0;
									}
								if ($dim1<300)
									{
									if ($deb==0) $modulo = 300-$dim1;
									}

								// Cout MC
								if ($mc=="bois") //le cout du bois droit 250, cout cintré 500 , cout débillardé 750
									{
									if ($deb==0) $cmc=250;
									else $cmc=750;
									}		
								if ($mc=="fer") $cmc=70;
								if ($mc=="laiton poli") $cmc=180;
								if ($mc=="laiton vieilli") $cmc=210;
								

								// Calcul du cout 
								$c= ($cmod + $cmc)*($dim1 + $modulo)/100 + ($deb*1200) + $cd;
								if ($dept==99) $c=0;
								settype($c, "integer");

								//particularité supplement cout MC bois
								$ttb = "";
								if  (($mc=="bois") AND ($deb!=0))
									{
									$cfer = ($cmod + 70)*($dim1 + $modulo)/100 + 1200 + $cd;
									settype($cfer, "integer");
									$ttb = "\n\nLe prix ci dessus est estimatif car le cout d'une main courante en ".$mc.", dont certaines parties sont sculptées dans la masse, ne peut être chiffré précisément sans connaitre la réelle configuration de votre escalier. ";
									$ttb = $ttb."Pour info, le cout global de votre rampe avec une main courante en fer est exactement de ".$cfer." euros HT. Merci de nous envoyer des plans ou des photos de votre escalier pour que nous puissions mieux étudier votre demande";
									}

								//Creation du texte mail 
								if ($dept<10) $tt="0".$dept;
								else $tt=$dept;
								
								$coor=$titr." ".$nom;
								if ($rue!="") $coor=$coor."\n".$rue;
								if ($ville!="") $coor=$coor."\n".$codpos." ".$ville;
								if ($tel1!="") $coor=$coor."\n".$tel1;
								if ($tel2!="") $coor=$coor."\n".$tel2;
								if ($comment!="") $coor=$coor."\n".$comment;

								$tt1="Le prix d'une rampe d'escalier modèle '".$model."', d'une longueur totale de ".$qq." m avec une main courante en ".$mc.", posée dans votre département (le ".$tt.") est de ".$c." euros HT.";
								if ($typesca=="0") $tt1="Le prix d'une rampe d'escalier droite, modèle '".$model."', d'une longueur totale de ".$qq." m avec une main courante en ".$mc.", posée dans votre département (le ".$tt.") est de ".$c." euros HT.";
								if ($typesca=="4") $tt1="Le prix d'un garde-corps modèle '".$model."', d'une longueur de ".$qq." m avec une main courante en ".$mc.", posé dans votre département (le ".$tt.") est de ".$c." euros HT.";

								$tt="Merci de nous avoir contacté pour votre projet.\n\n";
								
								if ($ttb!="") $tt1=$tt1.$ttb;

								$tt2="\n\nAu delà de notre expérience et de nos références nous respectons les principes d'un ouvrage réussi:\n";
								$tt3="\nLe DEBILLARDAGE est effectué sur site pour vous assurer le meilleur balancement possible";
								if ($deb==0) $tt3="";
								$tt3=$tt3."\nLe DESSIN est réalisé selon votre configuration et soumis à votre acceptation";
								$tt3=$tt3."\nLa FERRONNERIE est forgée dans notre atelier en suivant scrupuleusement votre dessin";
								$tt3=$tt3."\nL'ESTHETIQUE vient alors principalement du soin que nous apportons aux finitions";
								$tt5="\n\nPour vérifier ces atouts, n'hésitez pas à nous rendre visite (sur rendez-vous)";

								$tt=$tt.$tt1.$tt2.$tt3.$tt5;		
								
								//Création du texte pour l'agenda
								$nom_a=$nom;
								if($nom=="") $nom_a="Anonyme";
								$texta=$qq." m modèle ".$model;
									
								//CONNEXION A LA BASE DE DONNEES
								/**
								@MYSQL_CONNECT ("$dbserver","$dbuser","$dbpass") or die ("<p>Erreur: impossible de communiquer avec la base de donn&eacute;es.<br>		  V&eacute;rifiez les donn&eacute;s du fichier <b>data.php</b>.</p>");
								mysql_select_db("$dbdb");

								$Q_demand="INSERT INTO demand (nom,jour,heur,objet,modele,type,d1,d2,pose,tva,dp,prix_ht,email,tel1,tel2,titr,rue,code,ville,description,journal,support,ipvisit,ecran,send) 
									VALUES ('$nom','$jour','$heur','R','$model','$cmc','$dim1','0','1','$tva','$ft','$c','$mail','$tel1','$tel2','$titr','$rue','$codpos','$ville','$comment','web','$a1','$add_IP','$rezo','$sendmail')";													
								$Rd=mysql_query($Q_demand);
								$Rid = mysql_insert_id();
													
								$Q_agenda="INSERT INTO agenda (nom,jour,heur,description,code,categorie,titr,prenom,email,tel1,tel2,retour,url,user,id_user,actif) VALUES ('$nom_a','$jour','$heur','$texta','$codpos','4','$titr','','$mail','$tel1','$tel2','','','$Rid','0','1')";
								$Ra=mysql_query($Q_agenda);
								
								mysql_close();						
													
								// Envoi du mail
								mail("mspoirier@ferronnier.com","Dramp","$jour $heur $ft $cd\n$coor\n$mail\n$tt","From: mspoirier@ferronnier.com\nReply-To: mspoirier@ferronnier.com");

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

								echo " Vous avez choisi le mod&egrave;le $model <br>";
								echo " avec une main courante en $mc <br>";
								echo " pour une longueur de $dim1 cm ($qq m)<br>";
								if ($typesca=="4") echo " uniquement pour un garde-corps, vous n'avez pas besoin de rampe d'escalier<br>";
								if ($dept==99) echo " Cet ouvrage sera pos&eacute; hors de France <br>"; 
								  else if ($dept<10) echo " Cet ouvrage sera pos&eacute; dans le 0$dept <br>";
									else echo " Cet ouvrage sera pos&eacute; dans le $dept <br>";
								echo "  <br>";
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
					
						<!--header><p>Devis de rampe & garde-corps</p></header>
						
						<form>
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<select class="form-control form-control-sm" id="modele">
										<option value="Modele">Choix du modèle</option>
										<option value="Art-Deco">Art Déco</option>
										<option value="Art-Deco III">Art Déco III</option>
										<option value="Art-Deco Bronze">Art Déco Bronze</option>
										<option value="Art-Nouveau">Art Nouveau</option>
										<option value="Bateau">Bateau</option>
										<option value="Bouquet">Bouquet</option>          
										<option value="Charles VIII">Charles VIII</option>
										<option value="Croisade">Croisade</option>
										<option value="Directoire">Directoire</option>
										<option value="Francois I">François Ier</option>
										<option value="Gaspard II">Gaspard II</option>
										<option value="Gothique">Gothique</option>
										<option value="Henri III">Henri III</option>		  
										<option value="Henri IV">Henri IV</option>
										<option value="Louis XIV">Louis XIV</option>
										<option value="Louis XV">Louis XV</option>
										<option value="Louis XVI">Louis XVI</option>
										<option value="Rayon de Soleil">Rayon de Soleil</option>          
										<option value="Roman">Roman</option>
										<option value="Saint Eloi">Saint Eloi</option>
										<option value="Saint Barthelemy">Saint Barthélémy</option>
										<option value="Saint Louis">Saint Louis</option>          
										<option value="Surrealiste">Surréaliste</option>
										<option value="Vogue">Vogue</option>
									</select>
								</div>
								<div class="col-12 col-md-6">
									<div class="input-group mb-3">
										<input type="text" class="form-control  form-control-sm" id="" placeholder="Longeur totale (cm)">
										<div class="input-group-append">
											<span class="input-group-text" data-toggle="tooltip" data-html="true" data-placement="left" title="Rampe + garde-corps"><i class="fas fa-info-circle"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<select class="form-control form-control-sm" id="choix">
										<option value="Modele" selected>Choix de la main courante</option>
										<option value="fer">Fer</option>
										<option value="laiton poli">Laiton brillant</option>
										<option value="laiton vieilli">Laiton vieilli</option>
										<option value="bois">Bois</option>
									</select>
								</div>
								<div class="col-12 col-md-6">
									<div class="input-group">
										<input type="text" class="form-control  form-control-sm" id="" placeholder="Code postal du chantier">
										<div class="input-group-append">
											<span class="input-group-text"data-toggle="tooltip" data-html="true" data-placement="left" title="0 pour l'étranger"><i class="fas fa-info-circle"></i></span>
										</div>
									</div>
								</div>
							</div>
			
							<div class="form-row ml-1 mb-3">
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								  <label class="form-check-label" for="inlineRadio1">Escalier droit</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								  <label class="form-check-label" for="inlineRadio2">Escalier 1 quart tournant</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
								  <label class="form-check-label" for="inlineRadio3">Escalier 2 quart tournant</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
								  <label class="form-check-label" for="inlineRadio3">Pas d'escalier, uniquement un garde-corps</label>
								</div>
							</div>
				
							<div class="form-row">
								<div class="form-group col-12">
									<input type="email" class="form-control form-control-sm" id="" placeholder="Email">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-12 ">
									Pour faciliter nos échanges vous pouvez préciser:
								</div>
							</div>
							<div class="form-row ml-1 mb-3">
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
								  <label class="form-check-label" for="inlineRadio1">Madame</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
								  <label class="form-check-label" for="inlineRadio2">Monsieur</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
								  <label class="form-check-label" for="inlineRadio3">Société</label>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<input type="email" class="form-control form-control-sm" id="" placeholder="Nom">
								</div>
								<div class="form-group col-12 col-md-6">
									<input type="email" class="form-control form-control-sm" id="" placeholder="Rue du chantier">
								</div>
							</div>
							
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<input type="email" class="form-control form-control-sm" id="" placeholder="Ville du chantier">
								</div>
							</div>
							
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<div class="input-group">
										<input type="text" class="form-control  form-control-sm" id="" placeholder="Téléphone">
										<div class="input-group-append">
											<span class="input-group-text"data-toggle="tooltip" data-html="true" data-placement="left" title="10 chiffres sans espace.<br/>  Inscrire dans le commentaire<br/> les numéros internationaux"><i class="fas fa-info-circle"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group col-12 col-md-6">
									<div class="input-group">
										<input type="text" class="form-control  form-control-sm" id="" placeholder="2ème téléphone">
										<div class="input-group-append">
											<span class="input-group-text" data-toggle="tooltip" data-html="true" data-placement="left" title="10 chiffres sans espace.<br/>  Inscrire dans le commentaire<br/> les numéros internationaux"><i class="fas fa-info-circle"></i></span>
										</div>
									</div>
								</div>
							</div>
							
							
							
							<div class="form-row">
								<div class="form-group col-12">
									<textarea class="form-control form-control-sm" id="" rows="4" placeholder="commentaire"></textarea>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-secondary col-12 col-md-3 mb-1">Envoyer</button> <button type="submit" class="btn btn-secondary col-12 col-md-3 mb-1">Effacer</button>
							</div>
							<div class="col-12 text-center mt-4">
								<p class="col-12 text-center ">
								<a href="devis.php" class="text-link"><i class="fas fa-arrow-circle-left"></i> Autre devis</a>
								</p>
							</div>
							
						</form-->
						
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