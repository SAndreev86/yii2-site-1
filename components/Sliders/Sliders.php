<?php

namespace app\components\Sliders;

class Sliders
{
    public function readFiles($dir) {

        $files = [];

        foreach (array_diff( scandir( $dir), array('..', '.')) as $file) {
            $files[] = preg_replace("~.jpg~",'',$file);
        }

        return $files;
    }
}