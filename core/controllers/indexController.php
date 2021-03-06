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
            $model = 'default';

            $this->load->model($model);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$model}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            self::display($tpl);
        }       
		public function login(){
            $template = 'login';
            $model = 'default';

            $this->load->model($model);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$model}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);
        }
		public function logout(){
            $template = 'login';
            $model = 'default';

            $this->load->model($model);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$model}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            parent::display($tpl);
        }

	}