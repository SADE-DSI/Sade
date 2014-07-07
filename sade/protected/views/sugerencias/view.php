<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerencias'=>array('index'),
	$model->sgId,
);

 if (Yii::app()->user->checkAccess('Conserje')) {

	$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),);
 }


if (Yii::app()->user->checkAccess('Residente')) {

	$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Modificar', 'url'=>array('update', 'id'=>$model->sgId)), );

 }

if ( Yii::app()->user->isSuperAdmin) {
$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Responder', 'url'=>array('update', 'id'=>$model->sgId)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sgId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')), );
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
		'sfFecha',
		'sfUsuario',
	),
)); ?>
