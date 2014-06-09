<?php
/* @var $this ReservaespaciocomunController */
/* @var $model Reservaespaciocomun */

$this->breadcrumbs=array(
	'Reservaespaciocomuns'=>array('index'),
	$model->reFechaInicio=>array('view','id'=>$model->reFechaInicio),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->reFechaInicio)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar <?php echo $model->reFechaInicio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>