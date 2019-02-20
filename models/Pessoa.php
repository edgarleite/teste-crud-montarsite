<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "pessoa".
 *
 * @property int $id
 * @property string $nome
 * @property string $criado_em
 * @property string $atualizado_em
 */
class Pessoa extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pessoa';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(), 
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['criado_em', 'atualizado_em'], 
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['atualizado_em'], 
                ], 
                'value' => new Expression('NOW()'),
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 255],
            [['nome'], 'match', 'pattern' => '/^[a-zA-Z]{3,}(?: [a-zA-Z]+){1,}$/', 'message' => 'Por favor, informe nome e sobrenome.'],
            [['criado_em', 'atualizado_em'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome Completo',
            'criado_em' => 'Data de criação',
            'atualizado_em' => 'Data de atualização',
        ];
    }
}
