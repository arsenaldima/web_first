<?php
/* @var $this ComentsController */
/* @var $model Coments */

$this->breadcrumbs=array(
	'Coments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Coments', 'url'=>array('index')),
	array('label'=>'Manage Coments', 'url'=>array('admin')),
);
?>

<h1>Create Coments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>