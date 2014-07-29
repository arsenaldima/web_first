<?php
/* @var $this ComentsController */
/* @var $data Coments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perent_id')); ?>:</b>
	<?php echo CHtml::encode($data->perent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statia_id')); ?>:</b>
	<?php echo CHtml::encode($data->statia_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coment')); ?>:</b>
	<?php echo CHtml::encode($data->coment); ?>
	<br />


</div>