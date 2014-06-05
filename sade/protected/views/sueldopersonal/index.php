<?php
/* @var $this SueldopersonalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sueldopersonals',
);

$this->menu=array(
	array('label'=>'Create Sueldopersonal', 'url'=>array('create')),
	array('label'=>'Manage Sueldopersonal', 'url'=>array('admin')),
);
?>

<h1>Sueldopersonals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
