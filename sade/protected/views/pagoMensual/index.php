<?php
/* @var $this PagomensualController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pagomensuals',
);

$this->menu=array(
	array('label'=>'Create Pagomensual', 'url'=>array('create')),
	array('label'=>'Manage Pagomensual', 'url'=>array('admin')),
);
?>

<h1>Pagomensuals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
