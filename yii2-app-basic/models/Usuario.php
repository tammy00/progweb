<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $login
 * @property string $senha
 * @property string $nome
 * @property string $email
 * @property string $pagina
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'login', 'senha', 'nome', 'email'], 'required', 'message'=>'Este campo é obrigatório.'],
            [['id'], 'integer', 'min' => 2],
            [['login'], 'string', 'max' => 20],
            [['senha'], 'string', 'max' => 128],
            [['nome', 'pagina'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100]
            //[['senha', 'match', 'pattern'=>'/^[a-z0-9_-]{6,20}$/']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Informe seu ID:',
            'login' => 'Informe seu login:',
            'senha' => 'Informe sua senha:',
            'nome' => 'Informe seu nome:',
            'email' => 'Informe seu e-mail:',
            'pagina' => 'Informe sua página:',
        ];
    }
}
