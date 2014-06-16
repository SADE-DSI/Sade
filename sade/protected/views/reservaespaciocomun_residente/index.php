<?php
/* @var $this Reservaespaciocomun_residenteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reserva espacio común',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	//array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Reserva espacio común</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
