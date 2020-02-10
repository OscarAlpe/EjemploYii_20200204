<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <img src="<?= Yii::getAlias("@web") ?>/imgs/fort_awesome.jpg" alt="alternativo">
    <?= yii\helpers\Html::img('@web/imgs/expo-lyft.jpg', ['alt' => 'alternativo']) ?>
    <div class="caption">
      <h3 class="regla1"><?= $model->id ?></h3>
      <p><?= $model->nombre ?></p>
      <p><?= $model->apellidos ?></p>
    </div>
  </div>
</div>