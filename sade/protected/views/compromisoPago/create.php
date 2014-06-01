<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */

$this->breadcrumbs=array(
	'Compromisopagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar compromisos de pago', 'url'=>array('index')),
	array('label'=>'Administrar compromisos de pago', 'url'=>array('admin')),
);
?>

<h1>Crear compromiso de pago</h1>
<hr>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>