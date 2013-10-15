<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class sendController extends baseController{
		
		public function __construct(){
			parent::__construct();
		}
		public function index(){
            $template = 'send';
            $model = 'default';

            $this->load->model($model);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$model}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            self::display($tpl);
        }       
		public function editContact(){
            $template = 'test';
            $model = 'posts';

            $this->load->model($model);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$model}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);
        }
        public function createContact(){
            $template = 'send';
            $model = 'default';

            $this->load->model($model);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$model}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);        	
        }
		public function newContact(){
            $template = 'test';
            $model = 'posts';

            $this->load->model($model);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$model}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);
        }
		public function updateContact(){
            $template = 'test';
            $model = 'posts';

            $this->load->model($model);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$model}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);
        }

	}