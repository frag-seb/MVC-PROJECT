<?php

namespace Simple;

/**
 * Class baseController
 */
abstract class AbstractController implements ControllerInteface
{
    /**
     * @var Registry
     */
    protected $registry;

    /**
     * @var Load
     */
    protected $load;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->registry = Registry::getInstance();
        $this->load = new Load();
    }

    /**
     * @return mixed
     */
    abstract public function indexAction();

    /**
     * @param $key
     *
     * @return bool
     */
    final public function __get($key)
    {
        if ($return = $this->registry->$key) {
            return $return;
        }

        return false;
    }

    /**
     * @param $tpl
     */
    final protected static function display($tpl)
    {
        print $tpl;
    }
}
