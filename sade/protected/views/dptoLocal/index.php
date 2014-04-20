<?php
/* @var $this DptoLocalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dpto Locals',
);

$this->menu=array(
	array('label'=>'Create DptoLocal', 'url'=>array('create')),
	array('label'=>'Manage DptoLocal', 'url'=>array('admin')),
);
?>

<h1>Dpto Locals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
