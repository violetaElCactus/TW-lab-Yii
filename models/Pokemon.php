<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pokemon".
 *
 * @property string $Nombre
 * @property int $Peso
 * @property string $Color
 * @property string $Mote
 *
 * @property Clase $clase
 */
class Pokemon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pokemon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Peso', 'Color', 'Mote'], 'required'],
            [['Peso'], 'integer'],
            [['Nombre', 'Color', 'Mote'], 'string', 'max' => 20],
            [['Nombre'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Nombre' => 'Nombre',
            'Peso' => 'Peso',
            'Color' => 'Color',
            'Mote' => 'Mote',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClase()
    {
        return $this->hasOne(Clase::className(), ['Tipo' => 'Nombre']);
    }
}
