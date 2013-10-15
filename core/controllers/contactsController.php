<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class contactsController extends baseController{
		
		public function __construct(){
			parent::__construct();
		}
		public function index(){
            $template = 'contacts';
            $posts = 'default';

            $this->load->model($posts);
            $this->load->view('index');
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');
            $this->index->assign('posts', $this->{$posts}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            self::display($tpl);
        }
		public function editContact(){
            $template = 'test';
            $posts = 'posts';

            $this->load->model($posts);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$posts}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);
        }
        public function createContact(){
            $template = 'test';
            $posts = 'posts';

            $this->load->model($posts);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$posts}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);        	
        }
		public function newContact(){
            $template = 'test';
            $posts = 'posts';

            $this->load->model($posts);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$posts}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);
        }
		public function updateContact(){
            $template = 'test';
            $posts = 'posts';

            $this->load->model($posts);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$posts}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);
        }

	}