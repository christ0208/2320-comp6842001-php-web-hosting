<?php

namespace App\Routes;

class Router {
    private static Router $instance;
    private array $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    /**
     * Get route instance from application.
     */
    public static function getInstance() 
    {
        if (empty(self::$instance)) {
            self::$instance = new Router();
        }

        return self::$instance;
    }

    /**
     * Link new route path and method to specific controller or function.
     */
    public function add(string $method, string $path, string $controller, string $function) 
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    /**
     * Run controller or function based on inputted route path and method.
     */
    public function run(string $method, string $path) 
    {
        if (!empty($path)) {
            $path = "/";
        }

        foreach ($this->routes as $route) {
            if ($method === $route['method'] && $path === $route['path']) {                
                $controller = new $route['controller'];
                $function = $route['function'];
                $viewPath = $controller->$function();
                
                require __DIR__ . '/../../app/View' . $viewPath . '.php';
                return;
            }
        }

        http_response_code(404);
        echo "Not found";
    }
}