<?php
/* @var $this AvisoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Avisos',
);

$this->menu=array(
	array('label'=>'Crear Aviso', 'url'=>array('create')),
	array('label'=>'Administrar Aviso', 'url'=>array('admin')),
);
?>

<h1>Avisos</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
