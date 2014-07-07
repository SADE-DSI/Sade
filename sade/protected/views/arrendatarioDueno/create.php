<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */

$this->breadcrumbs=array(
	'Arrendatarios-Dueños'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear Arrendatario-Dueño</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'persona'=>$persona, 'reside'=>$reside)); ?>