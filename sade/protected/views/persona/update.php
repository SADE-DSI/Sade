<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->peRut=>array('view','id'=>$model->peRut),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Empleados', 'url'=>array('index')),
	array('label'=>'Crear Empleados', 'url'=>array('create')),
	array('label'=>'Ver Empleados', 'url'=>array('view', 'id'=>$model->peRut)),
	array('label'=>'Administrar Empleados', 'url'=>array('admin')),
);
?>

<h1>Actualizar Empleados <?php echo $model->peRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>