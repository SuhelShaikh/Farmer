<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use \frontend\models\accountsType
/* @var $this yii\web\View */
/* @var $model frontend\models\Accounts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accounts-form">

    <?php $form = ActiveForm::begin(); ?>
	<?php
		$array = [];
		$query = new yii\db\Query;
		$query->select('accounts.acc_id,accounts.name,accounts_type.name as accName')->from('accounts')->join('JOIN', 'accounts_type', 'accounts_type.acc_type_id = accounts.acc_type_id');
		$rows = $query->all();
		$array = [];
		foreach($rows as $row) {
			$array[$row['accName']][$row['acc_id']] = $row['name'];
		}
	?>
    <?= $form->field($model, 'acc_type_id')->textInput() ?>
	<?php echo $form->field($model, 'name')->widget(Select2::classname(), [
    'data' => $array,
    'language' => 'de',
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);
?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
