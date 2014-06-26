<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */

$this->breadcrumbs=array(
	'Arrendatarios/Dueños'=>array('index'),
	$model->adRut,
);

$this->menu=array(
	array('label'=>'Listar Arrendatarios/Dueños', 'url'=>array('index')),
	array('label'=>'Crear Arrendatarios/Dueños', 'url'=>array('create')),
	array('label'=>'Actualizar Arrendatario/Dueño', 'url'=>array('update', 'id'=>$model->adRut)),
	array('label'=>'Eliminar Arrendatario/Dueño', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->adRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Arrendatarios/Dueños', 'url'=>array('admin')),
);
?>

<h1>Ver Arrendatario/Dueño <?php echo $model->adRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	
	'data'=>$model,
	'attributes'=>array(
		'adRut',
		array('label'=>'Nombre Completo',
			'type'=>'text',
			'value'=>$model->getDatos($model->adRut, 'peNombresApellidos')),
	),
)); ?>
