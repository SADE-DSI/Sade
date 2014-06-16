<?php
/* @var $this PagomensualController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pagos',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Pagos</h1>
<hr>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
