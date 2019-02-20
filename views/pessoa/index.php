<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cadastros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-index">

    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <p class="text-right">
        <?= Html::a('Novo Cadasro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'criado_em',
            'atualizado_em',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
