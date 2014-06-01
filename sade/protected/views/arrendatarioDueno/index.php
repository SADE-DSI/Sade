<?php
/* @var $this ArrendatarioduenoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arrendatarios/Dueños',
);

$this->menu=array(
	array('label'=>'Crear Arrendatarios/Dueños', 'url'=>array('create')),
	array('label'=>'Administrar Arrendatarios/Dueños', 'url'=>array('admin')),
);
?>

<h1>Arrendatarios/Dueños</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
