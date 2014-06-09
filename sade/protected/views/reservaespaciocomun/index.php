<?php
/* @var $this ReservaespaciocomunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reservaespaciocomuns',
);

$this->menu=array(
	array('label'=>'Create Reservaespaciocomun', 'url'=>array('create')),
	array('label'=>'Manage Reservaespaciocomun', 'url'=>array('admin')),
);
?>

<h1>Reservaespaciocomuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
