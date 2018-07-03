<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clase".
 *
 * @property string $Tipo
 * @property string $Ataque1
 * @property string $Ataque2
 * @property string $Ataque3
 *
 * @property Pokemon $tipo
 */
class Clase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tipo', 'Ataque1', 'Ataque2', 'Ataque3'], 'required'],
            [['Tipo', 'Ataque1', 'Ataque2', 'Ataque3'], 'string', 'max' => 20],
            [['Tipo'], 'unique'],
            [['Tipo'], 'exist', 'skipOnError' => true, 'targetClass' => Pokemon::className(), 'targetAttribute' => ['Tipo' => 'Nombre']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Tipo' => 'Tipo',
            'Ataque1' => 'Ataque1',
            'Ataque2' => 'Ataque2',
            'Ataque3' => 'Ataque3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(Pokemon::className(), ['Nombre' => 'Tipo']);
    }
}
