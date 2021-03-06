<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tbl_department".
 *
 * @property integer $id
 * @property string $jina
 * @property string $aliyeweka
 * @property string $muda
 *
 * @property TblWafanyakazi[] $tblWafanyakazis
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jina'], 'required'],
            [['muda','parent_department'], 'safe'],
            [['jina', 'aliyeweka'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'jina' => Yii::t('app', 'Jina'),
            'parent_department' => Yii::t('app', 'Parent department'),
            'aliyeweka' => Yii::t('app', 'Aliyeweka'),
            'muda' => Yii::t('app', 'Muda'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblWafanyakazis()
    {
        return $this->hasMany(TblWafanyakazi::className(), ['department_id' => 'id']);
    }

    public function getParent()
    {
        return $this->hasOne(Department::className(), ['id' => 'parent_department']);
    }


    public static function getALl()
    {
        return ArrayHelper::map(Department::find()->all(),'id','jina');
    }
}
