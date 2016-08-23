<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sinhvien".
 *
 * @property integer $id
 * @property string $Ten
 * @property string $masv
 * @property string $lop
 */
class Sinhvien extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sinhvien';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Ten', 'masv', 'lop'], 'required'],
            [['Ten'], 'string', 'max' => 20],
            [['masv', 'lop'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Ten' => 'Ten',
            'masv' => 'Masv',
            'lop' => 'Lop',
        ];
    }
}
