<?php
/* @var $this VisitaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perfiles',
);

$this->menu=array(
	array('label'=>'Prueba'
					, 'url'=>Yii::app()->user->ui->systemupdateUrl
					, 'visible'=>Yii::app()->user->isSuperAdmin),



	array('label'=>'hrtsrfsrff', 'url'=>array('admin')),
);
?>

<h1>Perfiles</h1>
<hr>
Administración de Perfiles y Permisos


<?php  ?>
