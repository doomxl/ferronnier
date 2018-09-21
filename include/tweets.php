<?php
	require_once('TwitterAPIExchange.php');
	require_once('tools.php');

	/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
	/* acces token de Fahri*/
	
	function getTweets(){
		/*Poirier*/
		$settings = array(
			'oauth_access_token' => "388539907-VKud8N5fneVeEcZyWV8Df3zUWFtJ4gYf9kx91FB9",
			'oauth_access_token_secret' => "uYaPsoz0I65Nu5qsuhasc0Oaq8dQwHGbnjjMIWE3eDg5H",
			'consumer_key' => "lJQrr9MWXWXvWh21ioEDQ9HCj",
			'consumer_secret' => "lRwuL6rVwx3fIEeadWh3DLYdO7NaAIBxN2Lmlv0NAU5083SVPw"
		);
		
		/*Dahmani*/
		$settings2 = array(
			'oauth_access_token' => "837392966-KO0JF5dRLGLJnOSKf06FKEJBuV0cqf7tkzKSodRJ",
			'oauth_access_token_secret' => "sAm6ozxu09sgvfSHJn9ZNyYq2oE08C3jAbIU10bTwfgTB",
			'consumer_key' => "d929lCXhLZCBQXbxpshkdyU4i",
			'consumer_secret' => "67k7jvFz7kvTW60pPmFPsi4B2GWIRgpGIl0obKL4bHNp6cpKZR"
		);
		
		$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

		$requestMethod = "GET";
		if (isset($_GET['user']))  {
			$user = preg_replace("/[^A-Za-z0-9_]/", '', $_GET['user']);
		}  else {
			$user  = "iagdotme";
		}

		if (isset($_GET['count']) && is_numeric($_GET['count'])) {
			$count = $_GET['count'];
		} else {
			$count = 20;
		}

		//$user  = "dahmani03542033";
		$user  = "MSPoirier_Fer";
		$count = 3;

		$getfield = "?screen_name=$user&count=$count";

		$twitter = new TwitterAPIExchange($settings);
		$string = json_decode($twitter->setGetfield($getfield)
		->buildOauth($url, $requestMethod)
		->performRequest(),$assoc = TRUE);

		print('<pre>');
		print_r($string);
		print('</pre>');
		
		if (array_key_exists('errors', $string)){
			if($string["errors"][0]["message"] != "") {
				echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string["errors"][0]["message"]."</em></p>";exit();
			}
		}
		
		$result = array();
		
		foreach($string as $items) {
			$result[] = array('text' => $items['text'], 'timeago' => get_timeago(strtotime($items['created_at'])));
		}
		
		return $result;
		/*
		foreach($string as $items)
			{
				echo "Time and Date of Tweet: ".get_timeago(strtotime($items['created_at']))."<br />";
				echo "Tweet: ". $items['text']."<br />";
				echo "Tweeted by: ". $items['user']['name']."<br />";
				echo "Screen name: ". $items['user']['screen_name']."<br />";
				echo "Followers: ". $items['user']['followers_count']."<br />";
				echo "Friends: ". $items['user']['friends_count']."<br />";
				echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
			}
		*/
	}
?>