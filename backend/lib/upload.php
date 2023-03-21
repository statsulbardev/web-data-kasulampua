<?php

//upload.php

include 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

function changeGridlines(string $html): string
{
    return str_replace('{border: 1px solid black;}',
        '{border: 2px dashed red;}',
        $html);
}

function excelToHTML($excel_path){ 
	// $allowed_extension = array('xls', 'xlsx');
	// $file_array = explode(".", $_FILES['select_excel']['name']);
	// $file_extension = end($file_array);
	// if(in_array($file_extension, $allowed_extension))
	// if(true)
	if(file_exists($excel_path) && substr($excel_path, -5)==".xlsx")
	{
		$reader = IOFactory::createReader('Xlsx');
		$spreadsheet = $reader->load($excel_path);
		// $spreadsheet = $reader->load('./sample_data.xlsx');
		$writer = IOFactory::createWriter($spreadsheet, 'Html');
		// $writer->setEditHtmlCallback('changeGridlines');
		// $message = $writer->save('php://output');

		$hdr = $writer->generateHTMLHeader();
		$sty = $writer->generateStyles(false); // do not write <style> and </style>
		$newstyle = <<<EOF
		<style type='text/css'>
		$sty
		body {
			background-color: transparent;
		}
		table {
			width: 100%;

		}
		</style>
		EOF;
		$message = preg_replace('@</head>@', "$newstyle\n</head>", $hdr);
		$message .= $writer->generateSheetData();
		$message .= $writer->generateHTMLFooter();
		// $message = str_replace("@page", ".page", $message);
		// $message = str_replace("body", ".body", $message);
		
	}
	else
	{
		$message = '<div class="alert alert-danger">Error incorrect parameters</div>';
	}

    return $message;  //returns the second argument passed into the function
}


?>