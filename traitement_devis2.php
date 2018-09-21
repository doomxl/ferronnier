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

						$model = $_POST['model'];
						$typ = $_POST['typ']; //1 vantail...
						$lt = $_POST['lt']; //linteau
						$dim1 = $_POST['dim1'];//dimension 1 : hauteur
						$dim2 = $_POST['dim2'];//dimension 2 : largeur
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
								   $mob=1;};
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
							
						// Validation du type
						 if ($typ=="")
							{
							$ok=0;
							?>
							<p>&nbsp;</p>
							<div align="center"><font size="6">Type de porte</font></div>
							<p>&nbsp;</p>
							<p align="center">Vous n'avez pas renseign&eacute; le type de porte</p>
							<p align="center">Vous devez choisir entre 1 vantail, tierce, 2 vantaux...</p>	
							<p>&nbsp;</p>
							<p align="center"><font size="5">Merci de pr&eacute;ciser votre demande</font></p>
							<?
							}
							
						// Validation du linteau
						 if ($lt=="")
							{
							$ok=0;
							?>
							<p>&nbsp;</p>
							<div align="center"><font size="6">Forme du linteau</font></div>
							<p>&nbsp;</p>
							<p align="center">Vous n'avez pas renseign&eacute; la forme de votre linteau</p>
							<p align="center">Vous devez choisir entre droit ou cintr&eacute;</p>	
							<p>&nbsp;</p>
							<p align="center"><font size="5">Merci de pr&eacute;ciser votre demande</font></p>
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
							<p align="center">Pour voir nos ouvrages : <a target="_blank" href="porte.htm">Voir</a></p>	
							<p>&nbsp;</p>
							<p align="center"><font size="5">Merci de reformuler votre demande</font></p>
							<?
							}
							
						// Validation de la hauteur
						settype($dim1, "integer"); 
						if (($dim1<150) or ($dim1>400))
							{
							$ok=0;
							?>
							<p>&nbsp;</p>
							<div align="center"><font size="6">Hauteur non valide</font></div>
							<p>&nbsp;</p>
							<p align="center">La hauteur doit &ecirc;tre en chiffres exclusivement, ne pas inscrire de 
							caract&egrave;re du type (cm, + ,...)</p>
							<p align="center">l'unit&eacute; est le centim&egrave;tre, pour une hauteur de 
							2m10, inscrire 210</p>
							<p align="center">Enfin, la hauteur doit etre comprise en 150 et 400 cm </p>
							<p>&nbsp;</p>
							<p align="center"><font size="5">Merci de reformuler votre demande</font></p>
							<?
							}

						if ($ok==1)
							{
							// Tarif porte pose, creation des variables typp, lint, lmax
							settype($dim2, "integer");
							if (($typ!=14) and ($typ!=18) and ($typ!=25))
								{
								$typ=10;
								$cc=3475;
								$cp=882;
								$lmax=121;
								$typp='un vantail';
								}
							if ($typ==14) 
								{
								$cc=4591;
								$cp=1323;
								$lmax=171;
								$typp='tierce';
								}
							if ($typ==18) 
								{
								$cc=5495;
								$cp=1323;
								$lmax=231;
								$typp='deux vantaux';
								}	
							if ($typ==25) 
								{
								$cc=5495;
								if ($dim2>230) $cc=5880;
								$cp=1323;
								$lmax=301;
								$typp='avec deux parties fixes';
								}

								
							if (($dim2<70) or ($dim2>$lmax))// Validation de la largeur
								{
								$ok=0;
								?>
								<p>&nbsp;</p>
								<div align="center"><font size="6">Largeur non valide</font></div>
								<p>&nbsp;</p>
								<p align="center">La largeur doit &ecirc;tre en chiffres exclusivement, ne pas inscrire de 
								caract&egrave;re du type (cm, + ,...)</p>
								<p align="center">l'unit&eacute; est le centim&egrave;tre, pour une largeur de 
								2m10, inscrire 210</p>
								<p align="center">Enfin, la largeur doit etre sup&eacute;rieure &agrave; 70 cm, inf&eacute;rieure &agrave; 120 pour un vantail, </p>
								<p align="center">inf&eacute;rieure &agrave; 170 pour une porte tierce, et inf&eacute;rieure &agrave; 230 pour deux vantaux </p>
								<p>&nbsp;</p>
								<p align="center"><font size="5">Merci de reformuler votre demande</font></p>
								<?
								}
							}

						// DEBUT DES CALCULS
						if ($ok==1)
							{
							if ($lt==1)	$lint='cintré';
							else $lint='droit';
							
							// Tarif des Modeles
							$cmod=10000;
							if ($model=="Art-Deco") $cmod=147;
							if ($model=="Art-Nouveau") $cmod=178;
							if ($model=="Charles VIII") $cmod=175;
							if ($model=="Losange") $cmod=139;
							if ($model=="LouisXV") $cmod=288;
							if ($model=="LouisXVI") $cmod=201;
							if ($model=="Antoinette") $cmod=242;
							if ($model=="Neoclassique") $cmod=299;
							if ($model=="St-Germain") $cmod=175;
							if ($model=="Sully") $cmod=266;
							if ($model=="Surrealiste") $cmod=147;

							//Calcul cout
							if ($dim1>225) // plus value pour imposte ou hauteur superieur à 2m25
								{
								if ($typ==25) $cc=$cc+38*18;
								else $cc=$cc+38*$typ;
								}
							$c=$cc + $cp*$poz + $lt*91*$typ + $cmod*$typ;
							if ($typ==25) $c=$cc + $cp*$poz + $lt*91*18 + $cmod*$typ;
							settype($c, "integer");
								
							// Prix avec tva 20%	
								$cttc=1.2*$c;
								settype($cttc, "integer");
								
							//Creation du texte mail 
							$coor=$titr." ".$nom;
							if ($rue!="") $coor=$coor."\n".$rue;
							if ($ville!="") $coor=$coor."\n".$codpos." ".$ville;
							if ($tel1!="") $coor=$coor."\n".$tel1;
							if ($tel2!="") $coor=$coor."\n".$tel2;
							if ($comment!="") $coor=$coor."\n".$comment;	
							
							$tt1="Le prix d'une porte d'entrée ".$typp." modèle ".$model." en ".$dim1." x ".$dim2." (hxl) cm, avec un linteau ".$lint;
							if ($poz==1)
								{
								$tt2=", posée est de ".$c." euros HT.";
								}
							else
								{
								$tt2=", départ atelier est de ".$cttc." euros TTC.";
								}
								
							$tt="Merci de nous avoir contacté pour votre projet.\n\n";
							
							$tt=$tt.$tt1.$tt2;
							
							$tt3="\n\nNos portes sont entièrement conçues dans notre atelier d'Ecquevilly (78).\nNous utilisons des profilés spéciaux de 60 mm permettant d'inserer un double vitrage feuilleté antélio argent de 26 mm (verre retardateur d'effraction + effet miroir).\nUn double joint EPDM garantie une excellente isolation phonique et thermique.Le poids de nos portes (de 200 à 400 kg) est supporté par des paumelles sur roulement à billes permettant une manipulation confortable. Pour votre securité nous posons une serrure 3 points à bascule.\nEnfin chaque porte est sablée, reçoit une protection de zinc et une peinture epoxy laqué au four.\nEt biensur nous respectons toujours les principes d'un ouvrage de ferronnerie réussi:\n";
							$tt3=$tt3."\nLe DESSIN est réalisé selon votre configuration et soumis à votre acceptation";
							$tt3=$tt3."\nLa FERRONNERIE est forgée dans notre atelier en suivant scrupuleusement votre dessin";
							$tt3=$tt3."\nL'ESTHETIQUE vient alors principalement du soin que nous apportons aux finitions";
							$tt5="\n\nPour vérifier ces atouts, n'hésitez pas à nous rendre visite (sur rendez-vous)";	
							
							$tt=$tt.$tt3.$tt5;

							//Création du texte pour l'agenda
							$nom_a = $nom;
							if($nom=="") $nom_a = "Anonyme";
							$texta = "Porte ".$typp." modèle ".$model."	 (".$dim2." x ".$dim1." )";
								
							//CONNEXION A LA BASE DE DONNEES
							/**
							@MYSQL_CONNECT ("$dbserver","$dbuser","$dbpass") or die ("<p>Erreur: la base de donn&eacute;es est momentanément inaccessible.<br>Votre demande n'a pu être enregistrée, nous sommes désolés  pour cet incident.</p>");
							mysql_select_db("$dbdb");

							$Q_demand="INSERT INTO demand (nom,jour,heur,objet,modele,type,d1,d2,pose,tva,dp,prix_ht,email,tel1,tel2,titr,rue,code,ville,description,journal,support,ipvisit,ecran,send) 
								VALUES ('$nom','$jour','$heur','P','$model','$typ','$dim1','$dim2','$poz','$tva','$lt','$c','$mail','$tel1','$tel2','$titr','$rue','$codpos','$ville','$comment','web','$a1','$add_IP','$rezo','$sendmail')";													
							$Rd=mysql_query($Q_demand);
							$Rid = mysql_insert_id();
													
							$Q_agenda="INSERT INTO agenda (nom,jour,heur,description,code,categorie,titr,prenom,email,tel1,tel2,retour,url,user,id_user,actif) VALUES ('$nom_a','$jour','$heur','$texta','$codpos','4','$titr','','$mail','$tel1','$tel2','','','$Rid','0','1')";
							$Ra=mysql_query($Q_agenda);	

							mysql_close();
							
							// Envoi du mail
							mail("mspoirier@ferronnier.com","Dport","$jour $heur\n$coor\n$mail\n$tt","From: mspoirier@ferronnier.com\nReply-To: mspoirier@ferronnier.com");

							// Affichage des informations saisies
							*/
							?>
							<table width="100%" border="0" id="Porte d'entr&eacute;e en fer forg&eacute; DEVIS" >
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
							<p align="center">&nbsp;</p>
							<?
							if ($lt==1)	$lint='cintr&eacute;';
							
							echo " Vous avez choisi une porte $typp<br>";
							echo " mod&egrave;le $model avec un linteau $lint<br>";
							echo " dimensions (hxl): $dim1 x $dim2 cm<br>";
							if ($poz==1) echo "pos&eacute;e en ile de France <br><br>"; else echo "sans pose <br><br>";
							echo " Nous enverrons votre devis &agrave; l'adresse E-mail : $mail <br>";
							?>
							<p>&nbsp;</p>
							<p align="center"><a href="javascript:history.go(-1)">Choisir un autre mod&egrave;le  ou modifier votre demande</a></p>
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