<?php
include 'language.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $language ?>">
    <head>
        <meta charset="utf-8">
        <title><?php echo $loc['head_title'] ?></title>
        <link rel="stylesheet" type="text/css" href="css/common.css" />
        <script type="text/javascript" src="js/functions.js"></script>
        <meta name="description" content="<?php echo $loc['head_description'] ?>">
		<link rel="stylesheet" id="theme-font-Hind-css" href="http://fonts.googleapis.com/css?family=Hind:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all">
    </head>
    
    <body>
        
        <header>
            <?php include 'header.php';?>
        </header>
        
        <nav><?php include 'nav.php';?></nav>
        
        <main>
            <article>
                
                    <h2><?php echo $loc['page_h2'] ?></h2>
                
                <?php echo $loc['page_content'] ?>
            </article>
        </main>
        
        <footer>
            <p>
                <?php echo $loc['footer_text'] ?>
            </p>
        </footer>

    </body>
</html>