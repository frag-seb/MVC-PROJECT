<?php

namespace Simple;

class Load
{
    /**
     * @param            $name
     * @param array|null $vars
     *
     * @return bool
     *
     * @throws \Exception
     */
    public function view($name, array $vars = null)
    {
        $view = 'FragSeb\View\\'.ucfirst($name.'View');

        if (class_exists($view)) {
            $registry = Registry::getInstance();
            $registry->$name = new $view();

            return true;
        }
    }

    /**
     * @param $name
     *
     * @return bool
     *
     * @throws \Exception
     */
    public function model($name)
    {
        $model = 'FragSeb\Model\\'.ucfirst($name.'Model');

        //if (class_exists($model)) {
            $registry = Registry::getInstance();
        $registry->$name = new $model();

        return true;
        //}
        //throw new \Exception('Model issues.');
    }
}
