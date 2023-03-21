<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $excelFile;

    public function rules()
    {
        return [
            [['excelFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'xlsx'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
        //if (true) {
            $path = 'uploads/' . $this->excelFile->baseName . '.' . $this->excelFile->extension;
            // die($path);
            $this->excelFile->saveAs($path);
            return true;
        } else {
            return false;
        }
    }
}