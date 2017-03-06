<?php

if (! function_exists('check_active')) {
    /**
     * Assign high numeric IDs to a config item to force appending.
     *
     * @param  array  $routes
     * @return string
     */
    function check_active(array $routes)
    {
        foreach ($routes as $route) {
            if (Request::is($route)) return 'active';
        }
        return '';
    }
}
