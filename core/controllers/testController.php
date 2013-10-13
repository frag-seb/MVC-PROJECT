<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class testController extends baseController{
		
		public function __construct(){
			parent::__construct();
		}
		public function index($views = null, $posts = null){
		    $posts = ($posts === null)? 'test': $posts;
		    $views = ($views === null)? 'index': $views;

            $this->load->model($posts);
			$this->load->view($views);	
				
			$this->{$views}->setTemplate($views);
            $this->{$views}->assign('title', 'Dynamic title');  
            $this->{$views}->assign('posts', $this->{$posts}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            self::display($tpl);
        }
        
		public function test(){
			$posts = 'posts';
            $views = 'index';

            $this->load->model($posts);
            $this->load->view($views);  
                
            $this->{$views}->setTemplate($views);
            $this->{$views}->assign('title', 'test');  
            $this->{$views}->assign('posts', $this->{$posts}->getEntries());
            
            $tpl = $this->{$views}->loadTemplate();
            self::display($tpl);
		}
		
		private static function display($tpl){
		    echo $tpl;
		}

	}