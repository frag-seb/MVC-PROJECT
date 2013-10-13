<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta content='IE=8' http-equiv='X-UA-Compatible'>
        <title><?php echo $this->_['title'];?></title>
        <meta name="viewport" content="width=device-width">
        <!-- Das favicon.ico und das apple-touch-icon.png in das root Verzeichnis -->
        <link rel="stylesheet" href="/public/css/style.css"/>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 
    </head>
    <body>
    	<h1>Startseite</h1>
        <?php foreach($this->_['posts'] as $post):?>
				<h2><?php echo $post['title'];?></h2>
		<?php endforeach;?>        
    </body>
</html>