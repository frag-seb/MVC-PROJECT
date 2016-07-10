<?php

namespace FragSeb\Model;

use Simple\AbstractModel;

class PostsModel extends AbstractModel
{
    public function getEntries()
    {
        $return = array();
        $return[0] = array('title' => 'Das ist ein Test.');
        $return[1] = array('title' => 'Variablen werden übergeben');

        return $return;
    }
}
