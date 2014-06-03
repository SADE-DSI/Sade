<?php
/* @var $this MaterialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Materiales',
);

$this->menu=array(
	array('label'=>'Crear Material', 'url'=>array('create')),
	array('label'=>'Administrar Material', 'url'=>array('admin')),
);
?>

<h1>Materiales</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
