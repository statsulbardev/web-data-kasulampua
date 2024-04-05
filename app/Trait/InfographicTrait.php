<?php

namespace App\Trait;

use Illuminate\Support\Facades\File;

trait InfographicTrait
{
    public function getInfographic()
    {
        $path = storage_path('app/public/infographic/');

        $infographics = File::exists($path)
            ? File::allFiles($path)
            : null;

        return $infographics;
    }
}
