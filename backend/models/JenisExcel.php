<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_excel".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Excel[] $excels
 */
class JenisExcel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_excel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * Gets query for [[Excels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExcels()
    {
        return $this->hasMany(Excel::class, ['jenis_excel' => 'id']);
    }
}
