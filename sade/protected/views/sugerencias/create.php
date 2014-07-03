<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerencias'=>array('index'),
	'Crear',
);

if (Yii::app()->user->checkAccess('Residente')) {

	$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')), );
 }

if ( Yii::app()->user->isSuperAdmin) {
$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')), );
 }


?>

<h1>Crear Sugerencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>