<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($lang == 'fr') { // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
	include ('language/fr_lang.php');
} 

else if ($lang == 'en') { // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
	include ('language/en_lang.php');
} 

else if ($lang == 'de') { // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
	include ('language/de_lang.php');
}

else if ($lang == 'ru') { // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
	include ('language/ru_lang.php');
}

else if ($lang == 'nl') { // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
	include ('language/nl_lang.php');
}

else { // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
	include ('language/fr_lang.php');
}

?>