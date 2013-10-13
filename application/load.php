<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class Load{
		
		public function view($name,array $vars = null){
			$view =  $name.'View';
			$viewPath = VIEW_PATH.$name.'View.php';

			if(is_readable($viewPath)){
                require_once($viewPath);
                
				if(class_exists($view)){
				    $registry = Registry::getInstance();
                    $registry->$name = new $view;
                    return true;	
				}
            }
			throw new Exception('View issues');
		}	
		
		public function model($name){
			$model = $name.'Model';
			$modelPath = MODEL_PATH.$model.'.php';
			
			if(is_readable($modelPath)){
				require_once($modelPath);

				if(class_exists($model)){
					$registry = Registry::getInstance();
					$registry->$name = new $model;
					return true;
				}
			}
			throw new Exception('Model issues.');	
		}	
	}
