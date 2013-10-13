<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class indexController extends baseController{
		
		public function __construct(){
			parent::__construct();
		}
		public function index(){
            $template = 'index';
            $posts = 'posts';

            $this->load->model($posts);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$posts}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            self::display($tpl);
        }       
		public function test(){
            $template = 'index';
            $posts = 'posts';

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