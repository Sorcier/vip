<?php 
$language = $_GET ['language'];

if (empty ( $language )) {
	require ("select_lang.php");
} else {
	include ('language/'.$language.'_lang.php');
}
?>






<form action="language_switcher.php" method="post">
<select name="lang">
<option value="en"<?php if( $_COOKIE["language"] == "en" ) { echo " selected"; } ?>>English</option>
        <option value="ru"<?php if( $_COOKIE["language"] == "ru" ) { echo " selected"; } ?>>Russian</option>
    </select>
    <input type="submit" value="Select Language">
</form>

<p>Language: <?php if( isset( $_COOKIE["language"] ) ) { echo $_COOKIE["language"]; } else { echo "<em>not set</em>"; } ?></p>





<html>
<body>
  	 <?php echo TXT_ACCUEIL_INDEX; ?>
  	 <br>
  	 Meteo du jour : <?php echo TXT_METEO; ?>
  	 <br>
  	 Conseil du jour : <?php echo TXT_CONSEIL_INDEX; ?>
</body>
</html>