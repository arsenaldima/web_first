<?php
/* @var $this ComentsController */
/* @var $model Coments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'coments-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'perent_id'); ?>
		<?php echo $form->textField($model,'perent_id'); ?>
		<?php echo $form->error($model,'perent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statia_id'); ?>
		<?php echo $form->textField($model,'statia_id'); ?>
		<?php echo $form->error($model,'statia_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coment'); ?>
		<?php echo $form->textArea($model,'coment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'coment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->