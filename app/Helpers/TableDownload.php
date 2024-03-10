<?php

use File;
use Response;
function downloadTable($category, $filename)
{
    $filepath = public_path('data/' . $category . '/' . $filename);

    return Response::download($filepath);
}
