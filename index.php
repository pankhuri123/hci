<?php

// NOTE: Be sure to uncomment the following line in your php.ini file.
// ;extension=php_openssl.dll

// **********************************************
// *** Update or verify the following values. ***
// **********************************************

// Replace the subscriptionKey string value with your valid subscription key.

$key = '921d0c5ce6fb44ab8cc0b0f5251fcf32';

$host = "https://api.microsofttranslator.com";
$path = "/V2/Http.svc/Translate";


$text = "Hello";


$content = '';


function Translate ($host, $path, $key, $params, $content) {

    $headers = "Content-type: text/xml\r\n" .
        "Ocp-Apim-Subscription-Key: $key\r\n";

    // NOTE: Use the key 'http' even if you are making an HTTPS request. See:
    // http://php.net/manual/en/function.stream-context-create.php
    $options = array (
        'http' => array (
            'header' => $headers,
            'method' => 'GET'
        )
    );
    $context  = stream_context_create ($options);
    $result1 = file_get_contents ($host . $path . $params, false, $context);
    return $result1;
}

    if(isset($_GET['message'])) {

    	$target = $_GET['toLanguage'];
    	$fromLanguage =$_GET['fromLanguage'];

$params = '?from='. $fromLanguage . '&to=' . $target . '&text=' . urlencode($_GET['message']);
    	
$result = Translate ($host, $path, $key, $params, $content);


    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
		<div id="bottom">
		<font color="white">Click here to translate</font>
		</div>

		<button class="contact100-btn-show">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</button>
			

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>
			

			<form class="contact100-form " method="GET" action="" >
				<span class="contact100-form-title">
					Language Translator
				</span>
				<p>Select Your Language</p>
				<select name="fromLanguage" >
  					<option value="af">Afrikaans</option>
					<option value="ar">Arabic</option>
<option value="bn">Bangla</option>
<option value="bs">Bosnian (Latin)</option>
<option value="bg">Bulgarian</option>
<option value="yue">Cantonese (Traditional)</option>
<option value="ca">Catalan</option>
<option value="zh-Hans">Chinese Simplified</option>
<option value="zh-Hant">Chinese Traditional</option>
<option value="hr">Croatian</option>
<option value="cs">Czech</option>
<option value="da">Danish</option>
<option value="nl">Dutch</option>
<option value="en">English</option>
<option value="et">Estonian</option>
<option value="fj">Fijian</option>
<option value="fil">Filipino</option>
<option value="fi">Finnish</option>
<option value="fr">French</option>
<option value="de">German</option>
<option value="el">Greek</option>
<option value="ht">Haitian Creole</option>
<otion value="he">Hebrew</option>
<option value="hi">Hindi</option>
<option value="mww">Hmong Daw</option>
<option value="hu">Hungarian</option>
<option value="id">Indonesia</option>
<option value="it">Italian</option>
<option value="ja">Japanese</option>
<option value="sw">Kiswahili</option>
<option value="tlh">Klingon</option>
<optin value="tlh-Qaak">Klingon (plqaD)</option>
<option value="ko">Korean</option>
<option value="lv">Latvian</option>
<option value="lt">Lithuanian</option>
<option value="mg">Malagasy</option>
<option value="ms">Malay</option>
<option value="mt">Maltese</option>
<option value="nb">Norwegian</option>
<option value="fa">Persian</option>
<option value="pl">Polish</option>
<option value="pt">Portuguese</option>
<option value="otq">Queretaro Otomi</option>
<option value="ro">Romanian</option>
<option value="ru">Russian</option>
<option value="sm">Samoan</option>
<option value="sr-Cyrl">Serbian (Cyrillic)</option>
<option value="sr-Latn">Serbian (Latin)</option>
<option value="sk">Slovak</option>
<option value="sl">Slovenian</option>
<option value="es">Spanish</option>
<option value="sv">Swedish</option>
<option value="ty">Tahitian</option>
<option value="ta">Tamil</option>
<option value="th">Thai</option>
<option value="to">Tongan</option>
<option value="tr">Turkish</option>
<option value="uk">Ukrainian</option>
<option value="ur">Urdu</option>
<option value="vi">Vietnamese</option>
<option value="cy">Welsh</option>
<option value="yua">Yucatec Maya</option>
				</select>

				<div class="wrap-input100 rs1-wrap-input100 " data-validate="Message is required">
					<span class="label-input100">Enter your Message</span>
					<input class="input100" type="text" name="message" placeholder="Type Here">
					<span class="focus-input100"></span>
				</div>
				<p>Select Your Language</p>
				<select name="toLanguage">
  					<option value="af">Afrikaans</option>
<option value="ar">Arabic</option>
<option value="bn">Bangla</option>
<option value="bs">Bosnian (Latin)</option>
<option value="bg">Bulgarian</option>
<option value="yue">Cantonese (Traditional)</option>
<option value="ca">Catalan</option>
<option value="zh-Hans">Chinese Simplified</option>
<option value="zh-Hant">Chinese Traditional</option>
<option value="hr">Croatian</option>
<option value="cs">Czech</option>
<option value="da">Danish</option>
<option value="nl">Dutch</option>
<option value="en">English</option>
<option value="et">Estonian</option>
<option value="fj">Fijian</option>
<option value="fil">Filipino</option>
<option value="fi">Finnish</option>
<option value="fr">French</option>
<option value="de">German</option>
<option value="el">Greek</option>
<option value="ht">Haitian Creole</option>
<otion value="he">Hebrew</option>
<option value="hi">Hindi</option>
<option value="mww">Hmong Daw</option>
<option value="hu">Hungarian</option>
<option value="id">Indonesia</option>
<option value="it">Italian</option>
<option value="ja">Japanese</option>
<option value="sw">Kiswahili</option>
<option value="tlh">Klingon</option>
<optin value="tlh-Qaak">Klingon (plqaD)</option>
<option value="ko">Korean</option>
<option value="lv">Latvian</option>
<option value="lt">Lithuanian</option>
<option value="mg">Malagasy</option>
<option value="ms">Malay</option>
<option value="mt">Maltese</option>
<option value="nb">Norwegian</option>
<option value="fa">Persian</option>
<option value="pl">Polish</option>
<option value="pt">Portuguese</option>
<option value="otq">Queretaro Otomi</option>
<option value="ro">Romanian</option>
<option value="ru">Russian</option>
<option value="sm">Samoan</option>
<option value="sr-Cyrl">Serbian (Cyrillic)</option>
<option value="sr-Latn">Serbian (Latin)</option>
<option value="sk">Slovak</option>
<option value="sl">Slovenian</option>
<option value="es">Spanish</option>
<option value="sv">Swedish</option>
<option value="ty">Tahitian</option>
<option value="ta">Tamil</option>
<option value="th">Thai</option>
<option value="to">Tongan</option>
<option value="tr">Turkish</option>
<option value="uk">Ukrainian</option>
<option value="ur">Urdu</option>
<option value="vi">Vietnamese</option>
<option value="cy">Welsh</option>
<option value="yua">Yucatec Maya</option>
				</select>


				<div class="wrap-input100 " >
					<span class="label-input100">Translated Message:</span>
					
					<?php if (isset($result)) { ?>
         <?php echo $result ?>
    <?php } ?>
						 	
						 
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" value="submit1">
						<span>
							Translate
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
					
				</div>
			</form>

			<span class="contact100-more">
				If you think the translation is wrong  <a href="http://localhost/translate/ContactFrom_v6/index.php"> : Click here </a>
			</span>
			<p><span class="contact100-more">
				Completed Translation ?  <a href="https://ufl.qualtrics.com/jfe/form/SV_39PPlqlV852kTPf"> : Click here </a>
			</span></p>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
