<?php
/* @var $this AvisoController */
/* @var $model Aviso */

$this->breadcrumbs=array(
	'Avisos'=>array('index'),
	$model->avCodigo=>array('view','id'=>$model->avCodigo),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista De Avisos', 'url'=>array('index')),
	array('label'=>'Crear Aviso', 'url'=>array('create')),
	array('label'=>'Ver Aviso', 'url'=>array('view', 'id'=>$model->avCodigo)),
	array('label'=>'Administrar Aviso', 'url'=>array('admin')),
);
?>

<h1>Modificar Aviso <?php echo $model->avCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>