<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */

$this->breadcrumbs=array(
	'Arrendatarios-Dueños'=>array('index'),
	$model->adRut,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->adRut)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->adRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Ver Arrendatario-Dueño <?php echo $model->adRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	
	'data'=>$model,
	'attributes'=>array(
		'adRut',
		array('label'=>'Nombre Completo',
			'type'=>'text',
			'value'=>$model->getDatos($model->adRut, 'peNombresApellidos')),
		array('label'=>'Dirección',
			'type'=>'text',
			'value'=>$model->getDatos($model->adRut, 'peDireccion')),
		array('label'=>'E-mail',
			'type'=>'text',
			'value'=>$model->getDatos($model->adRut, 'peEmail')),
		array('label'=>'Teléfono',
			'type'=>'text',
			'value'=>$model->getDatos($model->adRut, 'peTelefono')),
		array('label'=>'Descripción',
			'type'=>'text',
			'value'=>$model->getDatos($model->adRut, 'peDescripcion')),
	),
)); ?>
