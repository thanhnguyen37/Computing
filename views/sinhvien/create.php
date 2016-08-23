<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sinhvien */

$this->title = 'Create Sinhvien';
$this->params['breadcrumbs'][] = ['label' => 'Sinhviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sinhvien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
