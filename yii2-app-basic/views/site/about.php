<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Aplicação desenvolvida para a disciplina Programação Web.
    </p>

    <p><?= $teste2 ."</br>". $oi ?></p>

    <code><?= __FILE__ ?></code>
</div>
