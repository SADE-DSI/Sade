<?php
/* @var $this CompromisopagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Compromisopagos',
);

$this->menu=array(
	array('label'=>'Create Compromisopago', 'url'=>array('create')),
	array('label'=>'Manage Compromisopago', 'url'=>array('admin')),
);
?>

<h1>Compromisopagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
