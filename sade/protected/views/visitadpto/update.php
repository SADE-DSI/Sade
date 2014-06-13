<?php
/* @var $this VisitadptoController */
/* @var $model Visitadpto */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	$model->vdCodigo=>array('view','id'=>$model->vdCodigo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Visitas', 'url'=>array('index')),
	array('label'=>'Crear Visita', 'url'=>array('create')),
	array('label'=>'Ver Visita', 'url'=>array('view', 'id'=>$model->vdCodigo)),
	array('label'=>'Administrar Visitas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Visita <?php echo $model->vdCodigo; ?></h1>

<?php $this->renderPartial('_formActualizar', array('model'=>$model)); ?>