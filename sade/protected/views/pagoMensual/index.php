<?php
/* @var $this PagomensualController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pagomensuals',
);

$this->menu=array(
	array('label'=>'Crear pago mensual', 'url'=>array('create')),
	array('label'=>'Administrar pagos mensuales', 'url'=>array('admin')),
);
?>

<h1>Pagos</h1>
<hr>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
