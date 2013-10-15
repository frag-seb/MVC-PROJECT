<?php
/**
 * 
 * Enter description here ...
 * @author Jochen
 *
 */
	class submissionController extends baseController{
		
		public function __construct(){
			parent::__construct();
		}
		public function index(){
            $template = 'submission';
            $model = 'default';

            $this->load->model($model);
            $this->load->view('index'); 
                
            $this->index->setTemplate($template);
            $this->index->assign('title', 'Dynamic title');  
            $this->index->assign('posts', $this->{$model}->getEntries());
            
            $tpl = $this->index->loadTemplate();
            self::display($tpl);
        }
	}