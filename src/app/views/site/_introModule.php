<?php
/** @var \yii\base\Module $module */

use yii\helpers\Url;

$moduleUrl = Url::to([$module->uniqueId . '/intro/index']);

?>
<div class="col-lg-4 mb-3">
    <h2><?= $module->introName ?></h2>

    <p><?= $module->introDescription ?></p>

    <p><a class="btn btn-outline-secondary" href="<?= $moduleUrl ?>" target="_blank"><?= Yii::t('app', 'Open {name}', ['name' => $module->introName]) ?> &raquo;</a></p>
</div>
