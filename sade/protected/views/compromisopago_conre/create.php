<?php
/* @var $this Compromisopago_conreController */
/* @var $model Compromisopago */

$this->breadcrumbs=array(
	'Compromisopagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Compromisopago', 'url'=>array('index')),
	array('label'=>'Manage Compromisopago', 'url'=>array('admin')),
);
?>

<h1>Create Compromisopago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>