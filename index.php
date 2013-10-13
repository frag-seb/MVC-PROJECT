<?php
/**
 * 
 * Enter description here ...
 * @var Jochen
 */
	define('SITE_PATH',realpath(dirname(__FILE__)).'/');
	/**/
	require_once('./configs/config.php');
	/**/
	require_once(SITE_PATH.'application/request.php');
	require_once(SITE_PATH.APP_PATH.'router.php');
	require_once(SITE_PATH.APP_PATH.'baseController.php');
	require_once(SITE_PATH.APP_PATH.'baseModel.php');
	require_once(SITE_PATH.APP_PATH.'baseViews.php');
	require_once(SITE_PATH.APP_PATH.'load.php');
	require_once(SITE_PATH.APP_PATH.'registry.php');
	require_once(CONTROLLER_PATH.'errorController.php');

	try{
	    if(!empty($_SESSION['USERID'])){
            require_once(CONTROLLER_PATH.'loginController.php');
            $login = new loginController;
            $login->index(); 
	    }else{
            Router::route(new Request);
	    }
	}catch(Exception $e){
		$controller = new errorController;
		$controller->error($e->getMessage());
	}
