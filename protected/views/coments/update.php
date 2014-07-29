<?php
/* @var $this ComentsController */
/* @var $model Coments */

$this->breadcrumbs=array(
	'Coments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coments', 'url'=>array('index')),
	array('label'=>'Create Coments', 'url'=>array('create')),
	array('label'=>'View Coments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Coments', 'url'=>array('admin')),
);
?>

<h1>Update Coments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>