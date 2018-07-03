<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compositor".
 *
 * @property string $pseudonimo
 * @property string $nombre
 * @property string $apellido
 * @property string $nacionalidad
 * @property string $nacimiento
 *
 * @property Cancion[] $cancions
 */
class Compositor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compositor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pseudonimo', 'nombre', 'apellido', 'nacionalidad', 'nacimiento'], 'required'],
            [['nacimiento'], 'safe'],
            [['pseudonimo', 'nombre', 'apellido', 'nacionalidad'], 'string', 'max' => 50],
            [['pseudonimo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pseudonimo' => 'Pseudonimo',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'nacionalidad' => 'Nacionalidad',
            'nacimiento' => 'Nacimiento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCancions()
    {
        return $this->hasMany(Cancion::className(), ['compositor' => 'pseudonimo']);
    }
}
