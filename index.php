<?php
/* 

INDEX





*/


/////////////////////////////////////////////////////////////////////////////////////////////
// PARAMETERS
/////////////////////////////////////////////////////////////////////////////////////////////
$pgid=$_GET['pg'];
if (!$pgid) $pgid = "home";

/////////////////////////////////////////////////////////////////////////////////////////////
// HEADERMATTER
/////////////////////////////////////////////////////////////////////////////////////////////
$pg_title = "$pgid | How to take care of pets";


/////////////////////////////////////////////////////////////////////////////////////////////
// ON-PAGE HEADER AND FOOTER
/////////////////////////////////////////////////////////////////////////////////////////////
$pg_header_h1 = "How to take care of pets";

$pg_footer = <<<END
<div id='copyr'>Created By and (c) Sophie 2014</div>
<a id='attribution' class='internal' href='?pg=img'>attribution</a>
END;

$pg_header = <<<END
<img class='heading' src='img/meerkat-head-2.png'/>
END;


/////////////////////////////////////////////////////////////////////////////////////////////
// MENU ITEMS
/////////////////////////////////////////////////////////////////////////////////////////////
$menu = [];
$menu['home'] = "Home";
$menu['about'] = "About";
$menu['cats'] = "Cats";
$menu['dogs'] = "Dogs";
$menu['rabbits'] = "Rabbits";
$menu['chinchillas'] = "Chinchillas";
$menu['guineapigs'] = "Guinea Pigs";
$menu['hamsters'] = "Hamsters";

$menu_items = [];
foreach ($menu as $target => $name)
	$menu_items[] = "<a class='menu internal' href='?pg=$target'>$name</a>";
$pg_menu = join(" - ", $menu_items);

$pg_menu = <<<END
<div id='menu'>
$pg_menu
</div>
END;

/////////////////////////////////////////////////////////////////////////////////////////////
// FONTS
/////////////////////////////////////////////////////////////////////////////////////////////
$fonts=[];
$fonts[] = ["Brush Lettering One", "http://openfontlibrary.org/face/brush-lettering-one"];
$fonts[] = ["Grundschrift", "http://openfontlibrary.org/face/grundschrift"];
$fonts[] = ["Parisienne", "http://fonts.googleapis.com/css?family=Parisienne"];


/////////////////////////////////////////////////////////////////////////////////////////////
// RENDER INDIVIDUAL PAGES
/////////////////////////////////////////////////////////////////////////////////////////////
global $pg_main;

switch($pgid){

////////////////////////////////////////////////////////////////
// pg=home
default:
case 'home':
include('_home.php');
break;
	
////////////////////////////////////////////////////////////////
// pg=home
case 'about':
include('_about.php');
break;

////////////////////////////////////////////////////////////////
// pg=cats
case 'cats':
include('_cats.php');
break;

////////////////////////////////////////////////////////////////
// pg=cats
case 'dogs':
include('_dogs.php');
break;

////////////////////////////////////////////////////////////////
// pg=rabbits
case 'rabbits':
include('_rabbits.php');
break;

////////////////////////////////////////////////////////////////
// pg=chinchillas
case 'chinchillas':
include('_chinchillas.php');
break;

////////////////////////////////////////////////////////////////
// pg=guineapigs
case 'guineapigs':
include('_guineapigs.php');
break;

////////////////////////////////////////////////////////////////
// pg=hamsters
case 'hamsters':
include('_hamsters.php');
break;

////////////////////////////////////////////////////////////////
// pg=img
case 'img':
include('_images.php');
break;
}

////////////////////////////////////////////////////////////////
// GENERATING FAVICONS
/*

we assume that the favicon is in a file called *favicon-raw.jpg* in a directory call img/ico
we then can generate the icons as follows
	
	convert -resize 64x64 favicon-raw.jpg favicon.jpg
	convert -resize 144x144 favicon-raw.jpg apple-touch-icon-xlarge.png
	convert -resize 114x114 favicon-raw.jpg apple-touch-icon-large.png
	convert -resize 72x72 favicon-raw.jpg apple-touch-icon-medium.png
	convert -resize 57x57 favicon-raw.jpg apple-touch-icon-small.png

*/

////////////////////////////////////////////////////////////////
// IOS FULLSCREEN APP TAGES
/*

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="viewport" content="width=device-width" />
	<link rel="apple-touch-startup-image" href="home.png" />  -- 320x460
	
	
	http://www.bennadel.com/blog/1945-using-the-cache-manifest-with-iphone-s-app-mode-for-native-web-applications.htm
	<html manifest="./cache_manifest.cfm">
*/

?>





<html>

<head>
	
	<title><?php echo $pg_title?></title>	
	<link rel='stylesheet' type='text/css' href='style.css'/>
	
	<!-- FAVICONS AND APPLE TOUCH ICONS -->
	<link href='img/ico/favicon.ico' rel='shortcut icon' type='image/x-icon' />
	<link href='img/ico/apple-touch-icon-xlarge.png' rel='apple-touch-icon-precomposed' sizes='144x144' type='image/png'/>
	<link href='img/ico/apple-touch-icon-large.png' rel='apple-touch-icon-precomposed' sizes='114x114' type='image/png'/>
	<link href='img/ico/apple-touch-icon-medium.png' rel='apple-touch-icon-precomposed' sizes='72x72' type='image/png'/>
	<link href='img/ico/apple-touch-icon-small.png' rel='apple-touch-icon-precomposed' type='image/png'/>
	
	<!-- IOS FULLSCREEN APP TAGS -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	
	<!-- FONTS -->
	<?php foreach ($fonts as $f) {?>
	<link rel='stylesheet' media='screen' href='<?php echo $f[1]?>' rel='stylesheet' type='text/css'/>
	<?php }?>
	
	<!-- SCRIPTS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="script.js"></script>

</head>

<body>

	<div id='outer'>

		<div id='header'>
			<h1 id='header_h1'><?php echo $pg_header_h1?></h1>
			<?php echo $pg_header?>
			<?php echo $pg_menu?>
		</div>

		<div id='main'>
			<?php echo $pg_main?>
		</div>

		<div id='footer'>
			<?php echo $pg_footer?>
		</div>

	</div>

</body>	
</html>