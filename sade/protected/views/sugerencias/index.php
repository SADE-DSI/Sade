<?php
/* @var $this SugerenciasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sugerencias',
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

<h1>Sugerencias</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
