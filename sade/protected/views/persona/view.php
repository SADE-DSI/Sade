<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->peRut,
);

$this->menu=array(
	array('label'=>'Listar Empleados', 'url'=>array('index')),
	array('label'=>'Crear Empleados', 'url'=>array('create')),
	array('label'=>'Actualizar Empleados', 'url'=>array('update', 'id'=>$model->peRut)),
	array('label'=>'Eliminar Empleados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->peRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Empleados', 'url'=>array('admin')),
);
?>

<h1>Ver Empleados <?php echo $model->peRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'peRut',
		'peNombresApellidos',
		'peEmail',
		'peTelefono',
		'peDescripcion',
		'peDireccion',
	),
)); ?>
