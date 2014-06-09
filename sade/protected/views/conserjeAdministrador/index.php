<?php
/* @var $this ConserjeadministradorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conserje/Administrador',
);

$this->menu=array(
	array('label'=>'Crear Conserje/Administrador', 'url'=>array('create')),
	array('label'=>'Administrar Conserje/Administrador', 'url'=>array('admin')),
);
?>

<h1>Conserje/Administrador </h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
