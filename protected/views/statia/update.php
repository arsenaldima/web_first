<?php
/* @var $this StatiaController */
/* @var $model Statia */

$this->breadcrumbs=array(
	'Statias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Statia', 'url'=>array('index')),
	array('label'=>'Create Statia', 'url'=>array('create')),
	array('label'=>'View Statia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Statia', 'url'=>array('admin')),
);
?>

<h1>Update Statia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>