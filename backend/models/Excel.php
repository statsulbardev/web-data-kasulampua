<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "excel".
 *
 * @property int $id
 * @property string $path
 * @property int $uploaded_by
 * @property int|null $approved_by
 * @property int $jenis_excel 1=sosial, 2=ekonomi, 3=pertanian
 *
 * @property JenisExcel $jenisExcel
 */
class Excel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'excel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['path', 'uploaded_by', 'jenis_excel'], 'required'],
            [['uploaded_by', 'approved_by', 'jenis_excel'], 'integer'],
            [['path'], 'string', 'max' => 255],
            [['path'], 'unique'],
            [['jenis_excel'], 'exist', 'skipOnError' => true, 'targetClass' => JenisExcel::class, 'targetAttribute' => ['jenis_excel' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'uploaded_by' => 'Uploaded By',
            'approved_by' => 'Approved By',
            'jenis_excel' => 'Jenis Excel',
        ];
    }

    public function validatePath($attribute, $params)
    {
        if (!str_contains($this->path, ",")) {
            $this->addError($attribute, 'Penamaan file excel tidak sesuai format contoh : judul tabel, tahun.xlsx');
            Yii::$app->session->setFlash('danger', "Penamaan file excel tidak sesuai format contoh : judul tabel, tahun.xlsx");
        }
    }

    /**
     * Gets query for [[JenisExcel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisExcel()
    {
        return $this->hasOne(JenisExcel::class, ['id' => 'jenis_excel']);
    }

    public function getUploadedBy()
    {
        return $this->hasOne(User::class, ['id' => 'uploaded_by']);
    }

    public function getApprovedBy()
    {
        return $this->hasOne(User::class, ['id' => 'approved_by']);
    }
}
