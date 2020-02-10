<?php

use yii\widgets\ListView;

/* @var $this yii\web\View */

$this->title = 'Ejemployii_20200204';

echo ListView::widget([
    'dataProvider' => $data,
    'itemView' => '_index',
]);

?>