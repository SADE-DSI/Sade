<?php
/* @var $this ContratopersonalController */
/* @var $model Contratopersonal */

$this->breadcrumbs=array(
	'Contrato Personal'=>array('index'),
	$model->peRut=>array('view','id'=>$model->peRut),
	'Finiquitar',
);

$this->menu=array(
	array('label'=>'Listar Contrato Personal', 'url'=>array('index')),
	array('label'=>'Crear Contrato Personal', 'url'=>array('create')),
	array('label'=>'Administrar Contrato Personal', 'url'=>array('admin')),
);
?>

<h1>Finiquitar a <?php echo $model->peRut; ?></h1>

<?php $this->renderPartial('_formFiniquito', array('model'=>$model)); ?>
  
