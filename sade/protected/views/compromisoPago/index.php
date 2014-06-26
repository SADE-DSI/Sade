<?php
/* @var $this CompromisopagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gastos Comunes',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Gastos Comunes</h1>
<hr>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
