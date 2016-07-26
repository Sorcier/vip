<?php
if (isset ( $_COOKIE ['lang'] )) {
	$language = $_COOKIE ['lang'];
} else {
	$language = substr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], 0, 2 );
}
/* Récupération du contenu du fichier .json */
$contenu_fichier_json = file_get_contents ( 'language/' . $language . '_lang.json' );
/* Les données sont récupérées sous forme de tableau (true) */
$loc = json_decode ( $contenu_fichier_json, true );
?>
