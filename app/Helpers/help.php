<?php

if (! function_exists('asset'))
{
    /**
     * @param string $path
     * @param null $resource
     * @return mixed
     */
    function asset(string $path, $resource = null) {
        return app('url')->asset($path, $resource);
    }
}
