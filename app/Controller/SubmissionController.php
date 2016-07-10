<?php

namespace FragSeb\Controller;

use Simple\AbstractController;

class SubmissionController extends AbstractController
{
    public function indexAction()
    {
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
