<?php
/* @var $this ArrendatarioduenoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arrendatarios-Dueños',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Arrendatarios-Dueños</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
