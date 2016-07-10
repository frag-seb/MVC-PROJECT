<?php

namespace FragSeb\Controller;

use Simple\AbstractController;

class ContactsController extends AbstractController
{
    public function indexAction()
    {
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

    public function editContactAction()
    {
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

    public function createContactAction()
    {
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

    public function newContactAction()
    {
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

    public function updateContactAction()
    {
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
