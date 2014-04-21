<?php
/* @var $this PagoMensualController */
/* @var $model PagoMensual */

$this->breadcrumbs=array(
	'Pago Mensuals'=>array('index'),
	$model->pmCodigo=>array('view','id'=>$model->pmCodigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List PagoMensual', 'url'=>array('index')),
	array('label'=>'Create PagoMensual', 'url'=>array('create')),
	array('label'=>'View PagoMensual', 'url'=>array('view', 'id'=>$model->pmCodigo)),
	array('label'=>'Manage PagoMensual', 'url'=>array('admin')),
);
?>

<h1>Update PagoMensual <?php echo $model->pmCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>