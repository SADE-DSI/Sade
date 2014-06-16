<?php
/* @var $this AvisoController */
/* @var $model Aviso */

$this->breadcrumbs=array(
	'Avisos'=>array('index'),
	'Crear',
);

if (Yii::app()->user->checkAccess('Conserje')) {

	$this->menu=array(
	array('label'=>'Lista de Sugerencias', 'url'=>array('index')), );
 }

if ( Yii::app()->user->isSuperAdmin) {
	$this->menu=array(
	array('label'=>'Lista De Avisos', 'url'=>array('index')),
	array('label'=>'Administrar Aviso', 'url'=>array('admin')),
);
}



?>

<h1>Crear Aviso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>