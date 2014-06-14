<?php
/* @var $this ResidedptoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Residedptos',
);

$this->menu=array(
	array('label'=>'Create Residedpto', 'url'=>array('create')),
	array('label'=>'Manage Residedpto', 'url'=>array('admin')),
);
?>

<h1>Residedptos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
