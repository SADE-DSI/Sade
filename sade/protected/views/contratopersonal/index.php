<?php
/* @var $this ContratopersonalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contrato Personal',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Contrato Personal</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
