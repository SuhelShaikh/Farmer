<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Accounts */

$this->title = 'Update Accounts: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->acc_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="accounts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
