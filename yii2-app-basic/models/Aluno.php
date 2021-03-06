<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property integer $id
 * @property integer $matricula
 * @property string $nome
 * @property string $sexo
 * @property integer $id_curso
 * @property integer $ano_ingresso
 *
 * @property Curso $idCurso
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_curso', 'ano_ingresso'], 'integer'],
            [['matricula', 'nome', 'sexo', 'id_curso', 'ano_ingresso'], 'required', 'message'=>'Este campo é obrigatório.'],
            [['nome'], 'string', 'max' => 200],
            [['sexo'], 'string', 'max' => 1],
            ['matricula', 'integer', 'min' => 8, 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matrícula',
            'nome' => 'Nome Completo',
            'sexo' => 'Sexo',
            'id_curso' => 'Curso de Graduação',
            'ano_ingresso' => 'Ano de Ingresso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCurso()
    {
        return $this->hasOne(Curso::className(), ['id' => 'id_curso']);
    }

    public function afterFind()
    { 
	$this->nome = ucwords(strtolower($this->nome)); 
	if ($this->sexo=='F') $this->sexo = 'Feminino'; 
	else $this->sexo = 'Masculino'; 
        switch ($this->id_curso) {
             case 1: 
                 $this->id_curso = 'Ciências da Computação';
                 break;
             case 2: 
                 $this->id_curso = 'Sistemas de Informação';
                 break;
             case 3: 
                 $this->id_curso = 'Engenharia da Computação';
                 break;
        }
    } 

}
