<?php
/* @var $this DptolocalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Departamentos Locales',
);


 if (Yii::app()->user->checkAccess('Conserje')) {

	$this->menu=array(
		 array('label'=>'Informe de Gastos Comunes Actual', 'url'=>array('pdf')),
  array('label'=>'Informe de Gastos Comunes Por Fecha', 'url'=>array('fecha')), );
  }


if (Yii::app()->user->checkAccess('Residente')) {

	$this->menu=array(
	 array('label'=>'Informe de Gastos Comunes Actual', 'url'=>array('pdf')),
  array('label'=>'Informe de Gastos Comunes Por Fecha', 'url'=>array('fecha')), );
 
 }

if ( Yii::app()->user->isSuperAdmin) {
$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
 );
}


?>

<h1>Departamentos-Locales</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
