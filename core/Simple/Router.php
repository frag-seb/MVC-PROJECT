<?php

namespace Simple;

class Router
{
    /**
     * @param Request $request
     *
     * @throws \Exception
     */
    public static function route(Request $request)
    {
        $controller = 'FragSeb\Controller\\' . $request->getController() . 'Controller';
        $method = $request->getMethod() . 'Action';
        $args = $request->getArgs();
    
        $controller = new $controller();
        $method = (is_callable(array($controller, $method))) ? $method : START_PAGE;

        if (!empty($args)) {
            call_user_func_array(array($controller, $method), $args);
        } else {
            call_user_func(array($controller, $method));
        }

        return;

        //throw new \Exception('404 - '.$request->getController().' not found');
    }
}
