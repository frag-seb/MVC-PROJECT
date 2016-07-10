<?php

namespace FragSeb\Controller;

use Simple\AbstractController;

class AdminController extends AbstractController
{
    public function indexAction()
    {
        $template = 'index';
        $posts = 'posts';

        $this->load->model($posts);
        $this->load->view('index');

        $this->index->setTemplate($template);
        $this->index->assign('title', 'Dynamic title');
        $this->index->assign('posts', $this->{$posts}->getEntries());

        $tpl = $this->index->loadTemplate();
        self::display($tpl);
    }
}
