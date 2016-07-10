<?php

namespace FragSeb\Model;

use Simple\AbstractModel;

class LoginModel extends AbstractModel
{
    public function getEntries()
    {
        $return = array();
        $return[0] = array('title' => 'Bitte einlogen.');
        $return[1] = array('title' => 'Test zum Einloggen.');

        return $return;
    }
}
