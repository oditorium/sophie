<?php
/*

HOME


*/


ob_start(); ?>
<h2>How to take care of pets</h2>

<img src='img/6x6/cat-kitten.jpg' class='onpage-small left'/>
<p>I love pets very much. When I was living in France I had a cat, and I enjoyed taking care of him
a lot. Also, when I am with friends or family who have pets, for example with my aunt in Germany
who has rabbits, then I always play with them, but I also feed them and I take care of them
because this is also very important.</p>

<img src='img/6x6/bunny-cute.jpg' class='onpage-small left'/>
<p>Having a pet is a lot of fun, but it is also a lot of work, because you have to care for them
every day. For example you have to feed them, for some of them you have to clean their cages or their
litter boxes, and some animals you have to walk outside every day.
Even if you go on holidays you have to care for your pets: either you have to take them with you, or if you have to
find someone else whilst you are away.
</p>

<img src='img/6x6/dog-puppy.jpg' class='onpage-small left'/>
<p>I made this website so that if you would like to have a pet, and you are thinking about which
pet to get, you know what you will have to do once you have it. You can use the links in the in 
the menu on the top to look at the pet you are interested. For example, if you click on <em>Cats</em>
above you'll see how to care for cats. I hope you enjoy it.</p>

<div style='clear:both'></div>



<?php
global $pg_main;
$pg_main = ob_get_clean();

