<?php
/* @var $this EspacioComunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Espacios Comunes',
);

$this->menu=array(
	array('label'=>'Crear Espacio Comun', 'url'=>array('create')),
	array('label'=>'Administrar Espacio Comun', 'url'=>array('admin')),
);
?>

<h1>Espacios Comunes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
