<?php

function parseExcelToHTML($category, $filename)
{
    require_once(public_path('lib/upload.php'));

    $path = sprintf(public_path('data/%s/%s'), $category, $filename);

    return excelToHTML($path);
}
