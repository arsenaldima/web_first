<?php
/* @var $this ComentsController */
/* @var $model Coments */

$this->breadcrumbs=array(
	'Coments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Coments', 'url'=>array('index')),
	array('label'=>'Create Coments', 'url'=>array('create')),
	array('label'=>'Update Coments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Coments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coments', 'url'=>array('admin')),
);
?>

<h1>View Coments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'perent_id',
		'user_id',
		'statia_id',
		'coment',
	),
)); ?>
