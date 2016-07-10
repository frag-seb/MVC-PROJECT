<?php

namespace Simple;

class Registry
{
    private static $instance;

    private $storage;

    /**
     * @return Registry
     */
    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __set($key, $val)
    {
        $this->storage[$key] = $val;
    }

    public function __get($key)
    {
        if (isset($this->storage[$key])) {
            return $this->storage[$key];
        }

        return false;
    }
}