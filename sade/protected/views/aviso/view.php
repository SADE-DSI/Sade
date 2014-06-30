<?php
/* @var $this AvisoController */
/* @var $model Aviso */

$this->breadcrumbs=array(
	'Avisos'=>array('index'),
	$model->avCodigo,
);

 if (Yii::app()->user->checkAccess('Conserje')) {

	$this->menu=array(
		array('label'=>'Lista De Aviso', 'url'=>array('index')), );
 }

if ( Yii::app()->user->isSuperAdmin) {
$this->menu=array(
	array('label'=>'Lista De Aviso', 'url'=>array('index')),
	array('label'=>'Crear Aviso', 'url'=>array('create')),
	array('label'=>'Modificar Aviso', 'url'=>array('update', 'id'=>$model->avCodigo)),
	array('label'=>'Eliminar Aviso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->avCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Aviso', 'url'=>array('admin')),
);

}
?>

<h1><?php echo $model->avTitulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'avCodigo',
		'avTitulo',
		'avFecha',
		'avAviso',
	),
)); ?>
