<?php
namespace Core;

class Routing
{
    public $routes = [
        [
            'route' => 'Home',
            'module' => 'mvc',
            'controller' => 'Xcontroller',
            'action' => 'Home',
        ],
        [
            'route' => '',
            'module' => 'mvc',
            'controller' => 'Xcontroller',
            'action' => 'Home',
        ],
        [
            'route' => 'defulte/Home',
            'module' => 'mvc',
            'controller' => 'Xcontroller',
            'action' => 'Home',
        ],
        [
            'route' => 'defulte',
            'module' => 'mvc',
            'controller' => 'Xcontroller',
            'action' => 'Home',
        ],
        [
            'route' => 'notfound/notfound',
            'module' => 'mvc',
            'controller' => 'Xcontroller',
            'action' => 'notfound',
        ],
        [
            'route' => 'defulte/users',
            'module' => 'mvc',
            'controller' => 'Xcontroller',
            'action' => 'users',
        ],
        [
            'route' => 'api/articles',
            'module' => 'Api',
            'controller' => 'ApiController',
            'action' => 'articles',
        ],
        
    ];

    public function __construct()
    {
        return $this->routes;
    }
}

