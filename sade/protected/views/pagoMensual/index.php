<?php
/* @var $this PagoMensualController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pago Mensuals',
);

$this->menu=array(
	array('label'=>'Create PagoMensual', 'url'=>array('create')),
	array('label'=>'Manage PagoMensual', 'url'=>array('admin')),
);
?>

<h1>Pago Mensuals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
