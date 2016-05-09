<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
            'year',
            'isbn',
            'description:ntext',
            [
                'attribute' => 'Action',
                'format' => 'raw',
                'value' => function ($model) {
                    return '<div>'. Html::a('View', [
                        'book/view','id'=>$model->id],
                        ['class' => 'btn btn-success']).'</div>';
                },
            ],
        ],
    ]);
    ?>

</div>
