<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	$model->ecCodigo=>array('view','id'=>$model->ecCodigo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Espacios Comunes', 'url'=>array('index')),
	array('label'=>'Crear Espacio Comun', 'url'=>array('create')),
	array('label'=>'Ver Espacios Comunes', 'url'=>array('view', 'id'=>$model->ecCodigo)),
	array('label'=>'Administrar Espacios Comunes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Espacio Comun <?php echo $model->ecCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>