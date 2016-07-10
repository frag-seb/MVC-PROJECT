<?php

namespace FragSeb\Model;

use Simple\AbstractModel;

class TestModel extends AbstractModel
{
    public function getEntries()
    {
        $return = array();
        $return[0] = array('title' => 'hello dffd test');
        $return[1] = array('title' => 'hello universe');

        return $return;
    }
}
