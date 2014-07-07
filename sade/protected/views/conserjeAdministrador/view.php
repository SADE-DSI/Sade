<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserje'=>array('index'),
	$model->caRut,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->caRut)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->caRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Ver Conserje <?php echo $model->caRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'caRut',
		array('label'=>'Nombre Completo',
			'type'=>'text',
			'value'=>$model->getDatos($model->caRut, 'peNombresApellidos')),
		array('label'=>'E-mail',
			'type'=>'text',
			'value'=>$model->getDatos($model->caRut, 'peEmail')),
		array('label'=>'Teléfono',
			'type'=>'text',
			'value'=>$model->getDatos($model->caRut, 'peTelefono')),
		array('label'=>'Descripción',
			'type'=>'text',
			'value'=>$model->getDatos($model->caRut, 'peDescripcion')),
		array('label'=>'Dirección',
			'type'=>'text',
			'value'=>$model->getDatos($model->caRut, 'peDireccion')),
	),
)); ?>
