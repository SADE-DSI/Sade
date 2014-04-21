<?php
/* @var $this ConserjeAdministradorController  */
/* @var $model ConserjeAdministrador */

$this->breadcrumbs=array(
	'Conserje Administradors'=>array('index'),
	$model->caRut,
);

$this->menu=array(
	array('label'=>'List ConserjeAdministrador', 'url'=>array('index')),
	array('label'=>'Create ConserjeAdministrador', 'url'=>array('create')),
	array('label'=>'Update ConserjeAdministrador', 'url'=>array('update', 'id'=>$model->caRut)),
	array('label'=>'Delete ConserjeAdministrador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->caRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConserjeAdministrador', 'url'=>array('admin')),
);
?>

<h1>View ConserjeAdministrador #<?php echo $model->caRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'caRut',
		'caClave',
	),
)); ?>
