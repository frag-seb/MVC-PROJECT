<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class memberController extends baseController{
		
		public function __construct(){
			parent::__construct();
		}
		public function index(){
            $template = 'member';
            $model = 'default';

            $this->load->model($model);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$model}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            self::display($tpl);
        }       
		public function editMember(){
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
        public function createMember(){
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
		public function newMember(){
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
		public function updateMember(){
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