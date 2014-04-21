<?php
/* @var $this ConserjeAdministradorController */
/* @var $model ConserjeAdministrador */

$this->breadcrumbs=array(
	'Conserje Administradors'=>array('index'),
	$model->caRut=>array('view','id'=>$model->caRut),
	'Update',
);

$this->menu=array(
	array('label'=>'List ConserjeAdministrador', 'url'=>array('index')),
	array('label'=>'Create ConserjeAdministrador', 'url'=>array('create')),
	array('label'=>'View ConserjeAdministrador', 'url'=>array('view', 'id'=>$model->caRut)),
	array('label'=>'Manage ConserjeAdministrador', 'url'=>array('admin')),
);
?>

<h1>Update ConserjeAdministrador <?php echo $model->caRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>