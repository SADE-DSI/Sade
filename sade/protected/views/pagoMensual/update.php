<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagomensuals'=>array('index'),
	$model->pmCodigo=>array('view','id'=>$model->pmCodigo),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar pagos mensuales', 'url'=>array('index')),
	array('label'=>'Crear pagos mensuales', 'url'=>array('create')),
	array('label'=>'Ver pagos mensuales', 'url'=>array('view', 'id'=>$model->pmCodigo)),
	array('label'=>'Administrar pagos mensuales', 'url'=>array('admin')),
);
?>

<h1>Actualizar pago mensual <?php echo $model->pmCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>