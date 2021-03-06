<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class Router{
		
		public static function route(Request $request){
			
			$controller = $request->getController().'Controller';
			$method = $request->getMethod();
			$args = $request->getArgs();

			$controllerFile = CONTROLLER_PATH.$controller.'.php';
            
			if(is_readable($controllerFile)){
				require_once $controllerFile;
				
				if(class_exists($controller)){
    				$controller = new $controller;
    				$method = (is_callable(array($controller,$method))) ? $method : START_PAGE;	
                
    				if(!empty($args)){
    					call_user_func_array(array($controller,$method),$args);
    				}else{	
    					call_user_func(array($controller,$method));
    				}	
    				return;
                }
                throw new Exception('Controller issues');
			}

			throw new Exception('404 - '.$request->getController().' not found');
		}
	}
