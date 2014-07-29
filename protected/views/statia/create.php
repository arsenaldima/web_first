<?php
/* @var $this StatiaController */
/* @var $model Statia */

$this->breadcrumbs=array(
	'Statias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Statia', 'url'=>array('index')),
	array('label'=>'Manage Statia', 'url'=>array('admin')),
);
?>

<h1>Create Statia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>