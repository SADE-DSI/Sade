<?php
/* @var $this ArrendatarioDuenoController */
/* @var $model ArrendatarioDueno */

$this->breadcrumbs=array(
	'Arrendatario Duenos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArrendatarioDueno', 'url'=>array('index')),
	array('label'=>'Manage ArrendatarioDueno', 'url'=>array('admin')),


);
?>

<h1>Ingresar nuevo Arrendatario/Dueño</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'persona'=>$persona)); ?>
