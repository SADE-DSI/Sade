<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	$model->ecCodigo,
);

$this->menu=array(
	array('label'=>'Listar Espacios Comunes', 'url'=>array('index')),
	array('label'=>'Crear Espacio Comun', 'url'=>array('create')),
	array('label'=>'Actualizar Espacio Comun', 'url'=>array('update', 'id'=>$model->ecCodigo)),
	array('label'=>'Eliminar Espacio Comun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ecCodigo),'confirm'=>'¿Estas seguro de eliminar este item?')),
	array('label'=>'Administrar Espacio Comun', 'url'=>array('admin')),
);
?>

<h1>Ver Espacio Comun #<?php echo $model->ecCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ecCodigo',
		'ecDescripcion',
	),
)); ?>
