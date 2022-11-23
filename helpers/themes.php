<?php

use Caffeinated\Themes\Theme;

if (! function_exists('theme_path')) {
    /**
     * Return the path to the given theme file.
     *
     * @param  string  $file
     * @param  string  $theme
     * @return string
     */
    function theme_path($file = '', $theme = null)
    {
        $themeC = new Theme();
        return $themeC->path($file, $theme);
    }
}