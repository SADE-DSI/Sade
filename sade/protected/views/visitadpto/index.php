<?php
/* @var $this VisitadptoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Visitas',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Visitas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
