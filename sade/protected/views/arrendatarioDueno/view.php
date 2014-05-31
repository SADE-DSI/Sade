<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */

$this->breadcrumbs=array(
	'Arrendatarioduenos'=>array('index'),
	$model->adRut,
);

$this->menu=array(
	array('label'=>'List Arrendatariodueno', 'url'=>array('index')),
	array('label'=>'Create Arrendatariodueno', 'url'=>array('create')),
	array('label'=>'Update Arrendatariodueno', 'url'=>array('update', 'id'=>$model->adRut)),
	array('label'=>'Delete Arrendatariodueno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->adRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Arrendatariodueno', 'url'=>array('admin')),
);
?>

<h1>View Arrendatariodueno #<?php echo $model->adRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	
	'data'=>$model,
	'attributes'=>array(
		'adRut',
		'adClave',
		'adEstado',
		'adFechaLiberacion',
	),
)); ?>
