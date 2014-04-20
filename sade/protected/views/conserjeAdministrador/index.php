<?php
/* @var $this ConserjeAdministradorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conserje Administradors',
);

$this->menu=array(
	array('label'=>'Create ConserjeAdministrador', 'url'=>array('create')),
	array('label'=>'Manage ConserjeAdministrador', 'url'=>array('admin')),
);
?>

<h1>Conserje Administradors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
