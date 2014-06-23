<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear pago mensual</h1>
<hr>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>