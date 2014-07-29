<?php
/* @var $this StatiaController */
/* @var $model Statia */

$this->breadcrumbs=array(
	'Statias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Statia', 'url'=>array('index')),
	array('label'=>'Create Statia', 'url'=>array('create')),
	array('label'=>'Update Statia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Statia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Statia', 'url'=>array('admin')),
);
?>

<h1>View Statia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'status',
		'picture',
		'header',
		'data',
		'path_statia',
	),
)); ?>
