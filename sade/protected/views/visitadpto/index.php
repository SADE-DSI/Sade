<?php
/* @var $this VisitadptoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Visitadptos',
);

$this->menu=array(
	array('label'=>'Create Visitadpto', 'url'=>array('create')),
	array('label'=>'Manage Visitadpto', 'url'=>array('admin')),
);
?>

<h1>Visitadptos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
