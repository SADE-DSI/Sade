<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */

$this->breadcrumbs=array(
	'Arrendatarios/Dueños'=>array('index'),
	$model->adRut=>array('view','id'=>$model->adRut),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Arrendatarios/Dueños', 'url'=>array('index')),
	array('label'=>'Crear Arrendatarios/Dueños', 'url'=>array('create')),
	array('label'=>'Ver Arrendatarios/Dueños', 'url'=>array('view', 'id'=>$model->adRut)),
	array('label'=>'Administrar Arrendatarios/Dueños', 'url'=>array('admin')),
);
?>

<h1>Actualizar Arrendatario/Dueño <?php echo $model->adRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'persona'=>$persona, 'reside'=>$reside)); ?>