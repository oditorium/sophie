<?php
/*

ABOUT


*/


ob_start(); ?>
<div class='letter'>
<p style='text-align: right'>London, September 2014</p>
<p>Hello!</p>
<img src='img/sophie-turkey-cropped-1.jpg'/ id='img_sophie'>

<p>My name is Sophie - Sophie Alexandra actually, but everyone calls me Sophie - and I am 8 years old. I live and go to school in London, to a French-English bilingual school.</p>

<p>I was born here in London, but I moved to France for a while before I came back here, which is why I speak French. I also speak a bit German because my father and Oma and Opa (my grandparents) are German.</p>

<p>When I was living in France in a small house in the countryside near Paris I had a cat, which was really fun. My aunt had some rabbits that I took care of when I was there, and with whom I played. </p>

<p>I love animal and I love taking care of them - that's why I made this website!</p>
	
<p>I hope you enjoy it!</p>
<p style='margin-left:60%; margin-top:20px'>Sophie</p>

<div style='clear:both'></div>	
</div>
<?php
global $pg_main;
$pg_main = ob_get_clean();
