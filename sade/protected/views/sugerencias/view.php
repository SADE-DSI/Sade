<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerencias'=>array('index'),
	$model->sgId,
);

 if (Yii::app()->user->checkAccess('Conserje')) {

	$this->menu=array(
	array('label'=>'Lista de Sugerencias', 'url'=>array('index')),);
 }


if (Yii::app()->user->checkAccess('Residente')) {

	$this->menu=array(
	array('label'=>'Lista de Sugerencias', 'url'=>array('index')),
	array('label'=>'Crear Sugerencia', 'url'=>array('create')),
	array('label'=>'Modificar Sugerencia', 'url'=>array('update', 'id'=>$model->sgId)), );

 }

if ( Yii::app()->user->isSuperAdmin) {
$this->menu=array(
	array('label'=>'Lista de Sugerencias', 'url'=>array('index')),
	array('label'=>'Responder Sugerencia', 'url'=>array('update', 'id'=>$model->sgId)),
	array('label'=>'Eliminar Sugerencias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sgId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Sugerencias', 'url'=>array('admin')), );
 }

?>

<h1>Ver Sugerencia # <?php echo $model->sgId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sgId',
		'sfComentario',
		'sfRespuesta',
		'sfLeido',
	),
)); ?>
