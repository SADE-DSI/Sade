<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagos'=>array('index'),
	$model->pmId=>array('view','id'=>$model->pmId),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->pmId)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar pago mensual <?php echo $model->pmCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>