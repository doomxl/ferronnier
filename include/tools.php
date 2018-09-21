<?php

	define('PAGE_TITLE_PREF', 'MS Poirier - ');

	function getAccueil(){
		$_arr = explode('/',$_SERVER['PHP_SELF']);
		return (end($_arr) == 'index.php') ? '' : '<li><a href="index.php">Accueil</a></li>';
	}
	
	function getPageParams($index){
		$_arr = explode('/',$_SERVER['PHP_SELF']);
		$result = array();
		switch(end($_arr)){
			case 'rampe.php': 		$result = 	array(	
													'title' => PAGE_TITLE_PREF.'Rampe d\'escalier & Garde-corps',
													'descr' => 'Rampe d\'escalier & Garde-corps en fer forgé',
													'bodyclass' => 'no-sidebar'
									); break;
			
			case 'porte.php': 		$result = 	array(	
													'title' => PAGE_TITLE_PREF.'Porte & Portail',
													'descr' => 'Porte & Portail en fer forgé',
													'bodyclass' => 'no-sidebar'
									); break;
			
			case 'verriere.php': 	$result = 	array(	
													'title' => PAGE_TITLE_PREF.'Verriere',
													'descr' => 'Le fer avec le verre',
													'bodyclass' => 'no-sidebar'
									); break;	
			case 'index2.php':		$result = 	array(	
													'title' => PAGE_TITLE_PREF.'Accueil',
													'descr' => 'Ferronnerie d\'Art fondée en 1926',
													'bodyclass' => 'homepage',
									); break;				
			case 'index.php':		$result = 	array(	
													'title' => PAGE_TITLE_PREF.'Accueil',
													'descr' => 'Ferronnerie d\'Art fondée en 1926',
													'bodyclass' => 'homepage',
									); break;
								
			default:				$result = 	array(	
													'title' => PAGE_TITLE_PREF.'Other',
													'descr' => 'Ferronnerie d\'Art fondée en 1926',
													'bodyclass' => 'no-sidebar',
									); break;
		}
		return $result[$index];
	}
	
	function getRichFooterCss(){
		$page_array = array('index.php');
		$_arr = explode('/',$_SERVER['PHP_SELF']);
		$class = in_array(end($_arr), $page_array) ? '' : ' hide-rich-footer';
		return $class;
	}
	
	/* $ptime = strtotime('YYYY-MM-DD H:M:S') 									*/
	/* deux formats: 'YYYY-MM-DD H:M:S' oubien 'Fri Mar 2 17:38:49 +0000 2018'	*/
	
	function get_timeago( $ptime ){
		$estimate_time = time() - $ptime;

		if( $estimate_time < 1 ){
			return 'less than 1 second ago';
		}

		$condition = array( 
					12 * 30 * 24 * 60 * 60  =>  'year',
					30 * 24 * 60 * 60       =>  'month',
					24 * 60 * 60            =>  'day',
					60 * 60                 =>  'hour',
					60                      =>  'minute',
					1                       =>  'second'
		);
		
		$condition = array( 
					12 * 30 * 24 * 60 * 60  =>  'an',
					30 * 24 * 60 * 60       =>  'mois',
					24 * 60 * 60            =>  'jour',
					60 * 60                 =>  'heure',
					60                      =>  'minute',
					1                       =>  'seconde'
		);

		foreach( $condition as $secs => $str ){
			$d = $estimate_time / $secs;

			if( $d >= 1 ){
				$r = round( $d );
				return 'il y a ' . $r . ' ' . $str . ( ($r > 1 && $str != 'mois') ? 's' : '' ) . '';
			}
		}
	}