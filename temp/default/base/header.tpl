<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta content='IE=8' http-equiv='X-UA-Compatible'>
        <title><?php echo $this->_['title'];?></title>
        <meta name="viewport" content="width=device-width">
        <!-- Das favicon.ico und das apple-touch-icon.png in das root Verzeichnis -->
        <link rel="stylesheet" href="/public/css/global.css"/>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 
    </head>
    <body>
    
    <div id="page">    
    	<div id="pageBox">
    	<?php if(empty($this->_['error'])) : ?>
    	<header>
    		<h1><a href="/index/">SMS Gateway</a></h1>
    	</header>
    	<nav>
	    	<ul>
	    		<li><a href="/index/">Home</a></li>
	    		<li><a href="/send/">SMS Versand</a></li>
	    		<li><a href="/contacts/">Kontakt</a></li>
	    		<li><a href="/submission/">Vorlage</a></li>
	    		<li><a href="/member/">Member</a></li>
	    		<li><a href="/index/logout">Logout</a></li>
	    	</ul>
    	</nav>
    	<?php endif; ?>
    	