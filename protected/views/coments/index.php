<?php
/* @var $this ComentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coments',
);

$this->menu=array(
	array('label'=>'Create Coments', 'url'=>array('create')),
	array('label'=>'Manage Coments', 'url'=>array('admin')),
);
?>

<h1>Coments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
