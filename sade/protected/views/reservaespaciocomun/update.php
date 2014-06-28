<?php
/* @var $this ReservaespaciocomunController */
/* @var $model Reservaespaciocomun */

$this->breadcrumbs=array(
	'Reserva espacio común'=>array('index'),
	$model->reId=>array('view','id'=>$model->reId),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->reId)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar <?php echo $model->reFechaInicio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>