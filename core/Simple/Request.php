<?php

namespace Simple;

class Request
{
    /**
     * @var mixed|string
     */
    private $controller;

    /**
     * @var mixed|string
     */
    private $method;

    /**
     * @var array
     */
    private $args;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $parts = explode('/', $_SERVER['REQUEST_URI']);
        $parts = array_filter($parts);

        $this->controller = ($c = array_shift($parts)) ? $c : START_PAGE;
        $this->method = ($c = array_shift($parts)) ? $c : START_PAGE;
        $this->args = (isset($parts[0])) ? $parts : array();
    }

    /**
     * @param $parts
     */
    private function setRequest($parts)
    {
        $this->_parts = $parts;
    }

    /**
     * @return mixed|string
     */
    public function getController()
    {
        return ucfirst($this->controller);
    }

    /**
     * @return mixed|string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return $this->args;
    }
}
