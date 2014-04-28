<?php
/* @var $this ArrendatarioduenoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arrendatarioduenos',
);

$this->menu=array(
	array('label'=>'Create Arrendatariodueno', 'url'=>array('create')),
	array('label'=>'Manage Arrendatariodueno', 'url'=>array('admin')),
);
?>

<h1>Arrendatarioduenos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
