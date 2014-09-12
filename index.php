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
END;

$pg_header = <<<END
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
	$menu_items[] = "<a class='menu' href='?pg=$target'>$name</a>";
$pg_menu = join(" - ", $menu_items);

$pg_menu = <<<END
<div id='menu'>
$pg_menu
</div>
END;


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
$pg_main = <<<END
<h2>About this website</h2>
blabla

<h2>About Sophie</h2>
blablabla

<br>
<img src='img/sophie-turkey-cropped.jpg'/ style='width: 200px'>	
<br>
END;
break;

////////////////////////////////////////////////////////////////
// pg=cats
case 'cats':
$pg_main = <<<END
<h2>Cats</h2>
blabla
END;
break;

////////////////////////////////////////////////////////////////
// pg=cats
case 'dogs':
$pg_main = <<<END
<h2>Dogs</h2>
blabla
END;
break;

////////////////////////////////////////////////////////////////
// pg=rabbits
case 'rabbits':
$pg_main = <<<END
<h2>Rabbits</h2>
blabla
END;
break;

////////////////////////////////////////////////////////////////
// pg=chinchillas
case 'chinchillas':
$pg_main = <<<END
<h2>Chinchillas</h2>
blabla
END;
break;

////////////////////////////////////////////////////////////////
// pg=guineapigs
case 'guineapigs':
$pg_main = <<<END
<h2>Guinea Pigs</h2>
blabla
END;
break;

////////////////////////////////////////////////////////////////
// pg=hamsters
case 'hamsters':
$pg_main = <<<END
<h2>Hamsters</h2>
blabla
END;
break;

}

?>





<html>

<head>
	
	<title><?php echo $pg_title?></title>	
	<link rel='stylesheet' type='text/css' href='style.css'/>
	<link rel="stylesheet" media="screen" href="http://openfontlibrary.org/face/brush-lettering-one" 
		rel="stylesheet" type="text/css"/>

</head>

<body>

	<div id='outer'>

		<div id='header'>
			#header
			<h1 id='header_h1'><?php echo $pg_header_h1?></h1>
			<?php echo $pg_header?>
			<?php echo $pg_menu?>
		</div>

		<div id='main'>
			#main
			<?php echo $pg_main?>
		</div>

		<div id='footer'>
			#footer
			<?php echo $pg_footer?>
		</div>

	</div>

</body>	
</html>