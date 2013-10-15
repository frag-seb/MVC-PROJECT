<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class errorController extends baseController{
		
		public function index(){}
		
			public function error($message = 'No information about the error'){
			$template = 'error';
            $this->load->view('index'); 
            $this->index->setTemplate($template);
            $this->index->assign('error', $message);
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);
            //echo '<pre>'.print_r($message,1).'</pre>';	
				
			}
	}
