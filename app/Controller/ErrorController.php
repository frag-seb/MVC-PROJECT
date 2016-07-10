<?php

namespace FragSeb\Controller;

use Simple\AbstractController;

class ErrorController extends AbstractController
{
    public function indexAction()
    {
        $this->error();
    }

    public function errorAction($message = 'No information about the error')
    {
        $template = 'error';
        $this->load->view('index');
        $this->index->setTemplate($template);
        $this->index->assign('error', $message);

        $tpl = $this->index->loadTemplate();
        parent::display($tpl);
        //echo '<pre>'.print_r($message,1).'</pre>';
    }
}
