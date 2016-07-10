<?php

namespace FragSeb\Controller;

use Simple\AbstractController;

class SendController extends AbstractController
{
    public function indexAction()
    {
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
    
    public function editContactAction()
    {
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
    
    public function createContactAction()
    {
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
    
    public function newContactAction()
    {
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
    
    public function updateContactAction()
    {
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
