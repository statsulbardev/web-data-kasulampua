<?php

function parseExcelToHTML($category, $filename)
{
    require_once(public_path('lib/upload.php'));

    $path = getPath($category, $filename);

    return excelToHTML($path);
}

function downloadTable($category, $filename)
{
    return getPath($category, $filename);
}


function getPath($category, $filename)
{
    return sprintf(storage_path('app/public/data/%s/%s'), $category, $filename);
}
