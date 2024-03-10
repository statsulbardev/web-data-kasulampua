<?php

namespace App\Trait;

trait TableTrait
{
    public function getTable(string $path)
    {
        $directory = public_path($path);

        $file      = array_diff(scandir($directory), array('.', '..'));

        return $file;
    }
}
