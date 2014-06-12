<?php
/* @var $this Reservaespaciocomun_conserjeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reserva espacio comun',
);

$this->menu=array(
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Reserva espacio comun</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
