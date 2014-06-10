<?php
/* @var $this ContratopersonalController */
/* @var $model Contratopersonal */

$this->breadcrumbs=array(
	'Contrato Personal'=>array('index'),
	$model->peRut=>array('view','id'=>$model->peRut),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Contrato Personal', 'url'=>array('index')),
	array('label'=>'Crear Contrato Personal', 'url'=>array('create')),
	array('label'=>'Ver Contrato Personal', 'url'=>array('view', 'id'=>$model->peRut)),
	array('label'=>'Administrar Contrato Personal', 'url'=>array('admin')),
);
?>

<h1>Actualizar Contrato Personal <?php echo $model->peRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
  
