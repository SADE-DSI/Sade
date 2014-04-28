<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserjeadministradors'=>array('index'),
	$model->caRut,
);

$this->menu=array(
	array('label'=>'List Conserjeadministrador', 'url'=>array('index')),
	array('label'=>'Create Conserjeadministrador', 'url'=>array('create')),
	array('label'=>'Update Conserjeadministrador', 'url'=>array('update', 'id'=>$model->caRut)),
	array('label'=>'Delete Conserjeadministrador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->caRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Conserjeadministrador', 'url'=>array('admin')),
);
?>

<h1>View Conserjeadministrador #<?php echo $model->caRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'caRut',
		'caClave',
	),
)); ?>
