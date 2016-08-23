<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SinhvienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sinhviens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sinhvien-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sinhvien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Ten',
            'masv',
            'lop',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
