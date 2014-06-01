<?php
/* @var $this CompromisopagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Compromisopagos',
);

$this->menu=array(
	array('label'=>'Crear compromiso de pago', 'url'=>array('create')),
	array('label'=>'Administrar compromiso de pago', 'url'=>array('admin')),
);
?>

<h1>Gastos comunes</h1>
<hr>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
