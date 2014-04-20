<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacio Comuns'=>array('index'),
	$model->ecCodigo=>array('view','id'=>$model->ecCodigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List EspacioComun', 'url'=>array('index')),
	array('label'=>'Create EspacioComun', 'url'=>array('create')),
	array('label'=>'View EspacioComun', 'url'=>array('view', 'id'=>$model->ecCodigo)),
	array('label'=>'Manage EspacioComun', 'url'=>array('admin')),
);
?>

<h1>Update EspacioComun <?php echo $model->ecCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>