<?php

namespace App\Trait;

trait TableTrait
{
    public function getTable(string $path)
    {
        $directory = storage_path('app/public/data/' . $path);

        $file      = array_diff(scandir($directory), array('.', '..'));

        return $file;
    }
}
