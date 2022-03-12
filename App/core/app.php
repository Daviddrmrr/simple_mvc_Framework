<?php
namespace Core;
require "../App/core/routing.php";
// require "../App/mvc/controller/Xcontroller.php";
use \mvc\controller\Xcontroller;

class app
{ 
    private $controller;
    private $action;
    private $params = [""];

    private function parseUrl()
    {
        $request = trim($_SERVER['REQUEST_URI'], '/');
        $request = filter_var($request, FILTER_SANITIZE_URL);
        $request = explode('/', $request);
        return $request;
    }

    public function __construct()
    {
        $url = $this->parseUrl();
        $routing = new Routing;

        if ($routing->routes) {
            $this->controller = new Xcontroller;
            $this->action = 'Home';
            $controllerPlusAction = (isset($url[0]) ? $url[0] : '') . (isset($url[1]) ? '/' . $url[1] : '');
            
            // var_dump ($controllerPlusAction);
            foreach ($routing->routes as $route) {
                
                
                
                if ($route['route'] == $controllerPlusAction) {
                    
                    if ($route['module'] . '/Controllers/' . $route['controller'] . '.php') {
                        
                        
                        $dynamicControllerName = "\\" . $route['module'] . "\Controller\\" . $route['controller'];
                        $this->controller = new $dynamicControllerName;
                        $this->action = $route['action'];
                        unset($url[0], $url[1]);
                        break;
                    }
                else {
                        $this->action = 'Home';
                    }
                } else {
                    $this->action = 'notfound';
                }
            }
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    }
}
// }