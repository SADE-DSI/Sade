<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerencias'=>array('index'),
	$model->sgId=>array('view','id'=>$model->sgId),
	'Responder',
);

if (Yii::app()->user->checkAccess('Conserje')) {

	$this->menu=array();
 }


if (Yii::app()->user->checkAccess('Residente')) {

	$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')), );
 }

if ( Yii::app()->user->isSuperAdmin) {
$this->menu=array(
array('label'=>'Administrar', 'url'=>array('admin')), );
 }


?>

<h1>Responder Sugerencia <?php echo $model->sgId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>