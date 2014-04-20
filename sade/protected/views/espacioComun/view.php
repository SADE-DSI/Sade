<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacio Comuns'=>array('index'),
	$model->ecCodigo,
);

$this->menu=array(
	array('label'=>'List EspacioComun', 'url'=>array('index')),
	array('label'=>'Create EspacioComun', 'url'=>array('create')),
	array('label'=>'Update EspacioComun', 'url'=>array('update', 'id'=>$model->ecCodigo)),
	array('label'=>'Delete EspacioComun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ecCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EspacioComun', 'url'=>array('admin')),
);
?>

<h1>View EspacioComun #<?php echo $model->ecCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ecCodigo',
		'ecDescripcion',
	),
)); ?>
