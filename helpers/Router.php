<?php

namespace Helpers\Router;

class Router
{
    protected array $routes = [];

    /**
     * Get function
     *
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function get(string $uri, string $controller): void
    {
        $this->add($uri, $controller, 'GET');
    }

    /**
     * Post function
     *
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function post(string $uri, string $controller): void
    {
        $this->add($uri, $controller, 'POST');
    }

    /**
     * Put function
     *
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function put(string $uri, string $controller): void
    {
        $this->add($uri, $controller, 'PUT');
    }

    /**
     * Delete function
     *
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function delete(string $uri, string $controller): void
    {
        $this->add($uri, $controller, 'DELETE');
    }

    /**
     * Require route function
     *
     * @param string $uri
     * @param string $method
     * @return void
     */
    public function route(string $uri, string $method): void
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                $controller = $route['controller'];
                require base_path($controller);
                break;
            }
        }
    }

    /**
     * Add route function
     *
     * @param string $uri
     * @param string $controller
     * @param string $method
     * @return void
     */
    private function add(string $uri, string $controller, string $method): void
    {
        $this->routes[] = compact('uri', 'controller', 'method');
    }
}
