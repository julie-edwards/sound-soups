<?php
//config.php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['about.php']= "About";
$nav1['menu.php']= "Menu";
$nav1['contact.php']= "Contact";

if (THIS_PAGE == 'menu.php'){
	$myTitle = ' | Menu';
}
elseif (THIS_PAGE == 'contact.php'){
	$myTitle = ' | Contact';
}
elseif (THIS_PAGE == 'about.php'){
	$myTitle = ' | About';
}

function makeLinks($nav1){
	
	$myReturn = '<ul>';
	foreach($nav1 as $link => $label){
	
	if($link == THIS_PAGE){
		$myReturn .= '<li class="active"><a href="' . $link . '">' . $label . '</a></li>';
	}
	else{
		$myReturn .= '<li><a href="' . $link . '">' . $label . '</a></li>';
	}
}  

	$myReturn .= '</ul>';
	return $myReturn;
}


?>