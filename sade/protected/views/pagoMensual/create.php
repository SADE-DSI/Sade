<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagomensuals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar pagos mensuales', 'url'=>array('index')),
	array('label'=>'Administrar pagos mensuales', 'url'=>array('admin')),
);
?>

<h1>Crear pago mensual</h1>
<hr>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>