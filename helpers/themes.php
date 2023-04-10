<?php

if (!function_exists('theme_path')) {
    /**
     * Return the path to the given theme file.
     *
     * @param  string  $file
     * @param  string  $theme
     * @return string
     */
    function theme_path($file = '', $theme = null)
    {
        
        $Theme = new Caffeinated\Themes\Theme();
        return $Theme->path($file, $theme);
    }
}
