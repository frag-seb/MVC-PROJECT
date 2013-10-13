<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class loginController extends baseController{
		
		public function __construct(){
			parent::__construct();
		}
		public function index(){
			$template = 'login';
		    $posts = 'login';

            $this->load->model($posts);
			$this->load->view('index');	
				
			$this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$posts}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            self::display($tpl);
        }
		
		private static function display($tpl){
		    echo $tpl;
		}

	}