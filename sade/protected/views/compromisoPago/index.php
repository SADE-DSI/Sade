<?php
/* @var $this CompromisoPagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Compromiso Pagos',
);

$this->menu=array(
	array('label'=>'Create CompromisoPago', 'url'=>array('create')),
	array('label'=>'Manage CompromisoPago', 'url'=>array('admin')),
);
?>

<h1>Compromiso Pagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
