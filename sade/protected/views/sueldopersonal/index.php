<?php
/* @var $this SueldopersonalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sueldo Personal',
);

$this->menu=array(
	array('label'=>'Crear Sueldo Personal', 'url'=>array('create')),
	array('label'=>'Administrar Sueldo Personal', 'url'=>array('admin')),
);
?>

<h1>Sueldo Personal</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
