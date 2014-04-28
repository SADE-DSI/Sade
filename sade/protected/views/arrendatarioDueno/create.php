<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */

$this->breadcrumbs=array(
	'Arrendatarioduenos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Arrendatariodueno', 'url'=>array('index')),
	array('label'=>'Manage Arrendatariodueno', 'url'=>array('admin')),
);
?>

<h1>Create Arrendatariodueno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>