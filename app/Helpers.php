<?php
/**
 * Created by PhpStorm.
 * User: Nampth
 * Date: 10/16/2018
 * Time: 11:43 AM
 */
if (!function_exists('include_route_files')) {

    /**
     * Loops through a folder and requires all PHP files
     * Searches sub-directories as well.
     *
     * @param $folder
     */
    function include_route_files($folder)
    {
        try {
            $rdi = new recursiveDirectoryIterator($folder);
            $it = new recursiveIteratorIterator($rdi);

            while ($it->valid()) {
                if (!$it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === 'php') {
                    require $it->key();
                }

                $it->next();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

if (!function_exists('home_route')) {

    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function home_route()
    {
        if (auth()->check()) {
            if (auth()->user()->can('view backend')) {
                return 'admin.dashboard';
            } else {
                return 'frontend.user.dashboard';
            }
        }

        return 'frontend.index';
    }
}

if (!function_exists('checkSidebar')) {

    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function checkSidebar($permissions)
    {
        $arrPermissions = auth()->user()->role()->first()->permissions()->get()->map(function ($item) {
            return $item->name;
        })->toArray();
        if (is_array($permissions)) {
            return !empty(array_intersect($permissions, $arrPermissions));
        }
        if (in_array($permissions, $arrPermissions)) {
            return true;
        }
        return false;
    }
}

if (!function_exists('setActiveMenu')) {

    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function setActiveMenu($url)
    {
        return url()->current() == $url ? 'm-menu__item--active' : '';
    }
}