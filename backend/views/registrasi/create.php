<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Registrasi */

$this->title = 'Create Registrasi';
$this->params['breadcrumbs'][] = ['label' => 'Registrasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
