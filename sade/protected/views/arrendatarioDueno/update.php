<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */

$this->breadcrumbs=array(
	'Arrendatarioduenos'=>array('index'),
	$model->adRut=>array('view','id'=>$model->adRut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Arrendatariodueno', 'url'=>array('index')),
	array('label'=>'Create Arrendatariodueno', 'url'=>array('create')),
	array('label'=>'View Arrendatariodueno', 'url'=>array('view', 'id'=>$model->adRut)),
	array('label'=>'Manage Arrendatariodueno', 'url'=>array('admin')),
);
?>

<h1>Update Arrendatariodueno <?php echo $model->adRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>