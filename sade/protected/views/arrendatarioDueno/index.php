<?php
/* @var $this ArrendatarioDuenoController  */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arrendatario Duenos',
);

$this->menu=array(
	array('label'=>'Create ArrendatarioDueno', 'url'=>array('create')),
	array('label'=>'Manage ArrendatarioDueno', 'url'=>array('admin')),
);
?>

<h1>Arrendatario Duenos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
