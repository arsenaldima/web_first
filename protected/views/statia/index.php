<?php
/* @var $this StatiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Statias',
);

$this->menu=array(
	array('label'=>'Create Statia', 'url'=>array('create')),
	array('label'=>'Manage Statia', 'url'=>array('admin')),
);
?>

<h1>Statias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
