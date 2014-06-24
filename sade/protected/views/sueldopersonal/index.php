<?php
/* @var $this SueldopersonalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sueldo Personal',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Sueldos Personal</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
