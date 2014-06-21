<?php
/* @var $this MaterialController */
/* @var $model Material */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	$model->maCodigo,
);

$this->menu=array(
	array('label'=>'Listar Material', 'url'=>array('index')),
	array('label'=>'Crear Material', 'url'=>array('create')),
	array('label'=>'Actualizar Material', 'url'=>array('update', 'id'=>$model->maCodigo)),
	array('label'=>'Eliminar Material', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->maCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Material', 'url'=>array('admin')),
);
?>

<h1>Ver Material <?php echo $model->maCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'maCodigo',
		'maNombre',
		'maDescripcion',
		'maEstado',
	),
)); ?>
