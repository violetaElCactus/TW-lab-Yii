<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cancion".
 *
 * @property string $nombre
 * @property string $genero
 * @property int $duracion
 * @property string $anio
 * @property string $compositor
 *
 * @property Compositor $compositor0
 */
class Cancion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cancion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'genero', 'duracion', 'anio', 'compositor'], 'required'],
            [['duracion'], 'integer'],
            [['anio'], 'safe'],
            [['nombre', 'genero', 'compositor'], 'string', 'max' => 50],
            [['nombre'], 'unique'],
            [['compositor'], 'exist', 'skipOnError' => true, 'targetClass' => Compositor::className(), 'targetAttribute' => ['compositor' => 'pseudonimo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'genero' => 'Genero',
            'duracion' => 'Duracion',
            'anio' => 'Anio',
            'compositor' => 'Compositor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositor0()
    {
        return $this->hasOne(Compositor::className(), ['pseudonimo' => 'compositor']);
    }
}
