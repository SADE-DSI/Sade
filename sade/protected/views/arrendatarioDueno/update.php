<?php
/* @var $this ArrendatarioDuenoController */
/* @var $model ArrendatarioDueno */
		$persona= new Persona;
$this->breadcrumbs=array(
	'Arrendatario Duenos'=>array('index'),
	$model->adRut=>array('view','id'=>$model->adRut),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArrendatarioDueno', 'url'=>array('index')),
	array('label'=>'Create ArrendatarioDueno', 'url'=>array('create')),
	array('label'=>'View ArrendatarioDueno', 'url'=>array('view', 'id'=>$model->adRut)),
	array('label'=>'Manage ArrendatarioDueno', 'url'=>array('admin')),
);
?>

<h1>Actualizar Arrendatario/Dueno <?php echo $model->adRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'persona'=>$persona)); ?>