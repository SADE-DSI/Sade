<?php
/* @var $this VisitaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perfiles',
);


$itemees = Yii::app()->user->ui->adminItems; 

$this->menu=$itemees;
?>

<h1>Perfiles</h1>
<hr>
Administración de Perfiles y Permisos


<?php  ?>
