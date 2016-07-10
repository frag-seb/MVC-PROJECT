<?php

namespace FragSeb\Controller;

use Simple\AbstractController;

class LoginController extends AbstractController
{
    public function indexAction()
    {
        $template = 'login';
        $posts = 'login';

        $this->load->model($posts);
        $this->load->view('index');

        $this->index->setTemplate($template);
        $this->index->assign('title', 'Dynamic title');
        $this->index->assign('posts', $this->{$posts}->getEntries());

        $tpl = $this->index->loadTemplate();
        parent::display($tpl);
    }
}
