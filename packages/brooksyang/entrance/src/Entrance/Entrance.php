<?php

namespace BrooksYang\Entrance;

class Entrance
{
    /**
     * Laravel application
     *
     * @var \Illuminate\Foundation\Application
     */
    public $app;

    /**
     * Entrance constructor.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Get the currently authenticated user or null.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->app->auth->user();
    }

    /**
     * Get current permission
     *
     * @return mixed
     */
    public static function currentPermission()
    {
        $method = \Request::method();
        $uri = \Request::route()->uri();
        $permission = config('entrance.permission');

        return $permission::where(['method' => $method, 'uri' => $uri])->first();
    }
}
