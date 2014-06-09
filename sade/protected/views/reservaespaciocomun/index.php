<?php
/* @var $this ReservaespaciocomunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reservaespaciocomuns',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Reserva espaciocomun</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
