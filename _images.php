<?php
/*

IMAGES


*/

$images = [];

// $images = ["--TITLE--", "--Attribution Link--", "--Image Link--"]

$images[] = ["Cat in the Snow", 
"img/6x6/cat-snow.jpg",
"http://albumarium.com/52fab12976707371d9030000-cats/538865307670735f9bee1c00",
"http://albumarium.com/media/W1siZiIsIjUzODg2NTMwNzY3MDczNWY5YmVjMWMwMCJdXQ?sha=4d66fefb"];

$images[] = ["Kitten", 
"img/6x6/cat-kitten.jpg",
"http://albumarium.com/52fab12976707371d9030000-cats/537fba56767073421f430000", 
"http://albumarium.com/media/W1siZiIsIjUzN2ZiYTU1NzY3MDczNDIxZjQwMDAwMCJdXQ?sha=87a74fe1"];

$images[] = ["Silver Cat", 
"img/6x6/cat-silver.jpg",
"http://albumarium.com/52fab12976707371d9030000-cats/52fb545f76707371d1170000", 
"http://albumarium.com/media/W1siZiIsIjUyZmI1NDVmNzY3MDczNzFkMTE1MDAwMCJdXQ?sha=3210e080"];

$images[] = ["Brown Cat", 
"img/6x6/cat-brown.jpg",
"http://albumarium.com/52fab12976707371d9030000-cats/5401ba097670733fc8772400", 
"http://albumarium.com/media/W1siZiIsIjU0MDFiYTA5NzY3MDczM2ZjODc0MjQwMCJdXQ?sha=6c30c396"];

$images[] = ["Dog in Woods", 
"img/6x6/dog-forest.jpg",
"http://albumarium.com/52fa5b237670733d93280000-dogs/53872fe27670735f9fab0c00", 
"http://albumarium.com/media/W1siZiIsIjUzODcyZmUyNzY3MDczNWY5ZmE5MGMwMCJdXQ?sha=d614cc3f"];

$images[] = ["Terrier", 
"img/6x6/dog-terrier.jpg",
"http://albumarium.com/52fa5b237670733d93280000-dogs/53a3f9217670732211bd0a00", 
"http://albumarium.com/media/W1siZiIsIjUzYTNmOTIxNzY3MDczMjIxMWJhMGEwMCJdXQ?sha=1bd8e8de"];

$images[] = ["Puppy", 
"img/6x6/dog-puppy.jpg",
"http://albumarium.com/52fa5b237670733d93280000-dogs/53be16037670737e466f7500", 
"http://albumarium.com/media/W1siZiIsIjUzYmUxNjAzNzY3MDczN2U0NjZkNzUwMCJdXQ?sha=ef53135e"];

$images[] = ["Meerkat", 
"img/6x6/meerkat-sqr.jpg",
"http://albumarium.com/52fa55d77670733d85030000-animals/53e3c1527670733ef56c0200", 
"http://albumarium.com/media/W1siZiIsIjUzZTNjMTUyNzY3MDczM2VmNTY5MDIwMCJdXQ?sha=4b63fca8"];

$images[] = ["White Baby Bunny", 
"img/6x6/bunny-parrot.jpg",
"http://albumarium.com/53fe2bd676707326da752500-bunny/540054b87670735c601e2800", 
"http://albumarium.com/media/W1siZiIsIjU0MDA1NGI4NzY3MDczNWM2MDFjMjgwMCJdXQ?sha=9dad8e72"];

$images[] = ["Lawn Bunny", 
"img/6x6/bunny-lawn.jpg",
"http://albumarium.com/53fe2bd676707326da752500-bunny/5400558a767073593fa71200", 
"http://albumarium.com/media/W1siZiIsIjU0MDA1NThhNzY3MDczNTkzZmE0MTIwMCJdXQ?sha=4ab8bb2f"];

$images[] = ["Lion Bunny", 
"img/6x6/bunny-lion.jpg",
"http://albumarium.com/53fe2bd676707326da752500-bunny/54005765767073593fc61200", 
"http://albumarium.com/media/W1siZiIsIjU0MDA1NzY1NzY3MDczNTkzZmM0MTIwMCJdXQ?sha=463c03ae"];

$images[] = ["Serious Bunny", 
"img/6x6/bunny-serious.jpg",
"http://albumarium.com/53fe2bd676707326da752500-bunny/5400579b7670735c60452800", 
"http://albumarium.com/media/W1siZiIsIjU0MDA1NzliNzY3MDczNWM2MDQzMjgwMCJdXQ?sha=269dd1ee"];

$images[] = ["Cute Bunny", 
"img/6x6/bunny-cute.jpg",
"http://albumarium.com/53fe2bd676707326da752500-bunny/54005607767073593fad1200", 
"http://albumarium.com/media/W1siZiIsIjU0MDA1NjA3NzY3MDczNTkzZmFiMTIwMCJdXQ?sha=ac89a9ab"];

/*



$images[] = ["title", 
"local",
"link", 
"src"];

*/




$html = "";

foreach ($images as $i){
	$title = $i[0];
	$link = $i[2];
	$src = $i[1] != "na" ? $i[1]: $i[3];
	
	$html .= <<<END
<h3>$title</h3> 
<img class='preview' src='$src'/><br/>
<a href='$link' target='_blank'>attribution</a>
END;

}

global $pg_main;
$pg_main = <<<END
<h2>Images</h2>

<p>This page contains every external image we have used on our website,
together with the source where we have found it for attribution 
and license information.</p>

<p>All those images are copyrighted and to the best of our knowledge
their license allows us to use them on our website. </p>
$html

<h3>Image sources</h3>

The images have been sourced from a subset of the following sites
<ul>
<li><a href='http://unsplash.com/' target='_blank'>Unsplash</a></li>
<li><a href='http://albumarium.com/' target='_blank'>Albumarium</a></li>
<li><a href='http://picjumbo.com/' target='_blank'>Picjumbo</a></li>
<li><a href='http://www.gratisography.com/' target='_blank'>Gratisography</a></li>
<li><a href='http://startupstockphotos.com/' target='_blank'>Startup Stockphotos</a></li>
<li><a href='http://littlevisuals.co/' target='_blank'>Little Visuals</a></li>
<li><a href='http://www.lifeofpix.com/' target='_blank'>Life of Pix</a></li>
<li><a href='http://deathtothestockphoto.com/' target='_blank'>Death to the Stockphoto</a></li>
</ul>

<h3>Fonts</h3>

The fonts currently in use are
<ul>
<li style="font-family:'Brush Lettering One'; font-weight: normal; font-style: italic;">
	<a href='http://openfontlibrary.org/en/font/brush-lettering-one' target='_blank'>Brush Lettering One (italic)</a>
</li>
<li style="font-family:'Grundschrift'; font-weight: normal; font-style: italic;">
	<a href='http://openfontlibrary.org/en/font/grundschrift' target='_blank'>Grundschrift (italic)</a>
</li>
<li style="font-family:'Parisienne'; font-weight: normal; font-style: normal;">
	<a href='https://www.google.com/fonts/specimen/Parisienne' target='_blank'>Parisienne	</a>
</li>
</ul>


They have been sourced from a subset of the following sites
<ul>
<li><a href='http://openfontlibrary.org/' target='_blank'>Open Font Library</a></li>
<li><a href='https://www.google.com/fonts' target='_blank'>Google Fonts</a></li>
</ul>
END;

