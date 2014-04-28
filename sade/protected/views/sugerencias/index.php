<?php
/* @var $this SugerenciasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sugerencias',
);

$this->menu=array(
	array('label'=>'Crear Sugerencia', 'url'=>array('create')),
	array('label'=>'Administrar Sugerencias', 'url'=>array('admin')),
);
?>

<h1>Sugerencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
