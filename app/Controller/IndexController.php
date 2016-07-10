<?php

namespace FragSeb\Controller;

use Simple\AbstractController;

class IndexController extends AbstractController
{
    public function indexAction()
    {
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
    
    public function loginAction()
    {
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
    
    public function logoutAction()
    {
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
