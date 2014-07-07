<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserjes'=>array('index'),
	$model->caRut=>array('view','id'=>$model->caRut),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->caRut)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Conserjes <?php echo $model->caRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'persona'=>$persona)); ?>