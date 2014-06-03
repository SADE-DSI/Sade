<?php
/* @var $this ConserjeadministradorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conserje/administrador',
);

$this->menu=array(
	array('label'=>'Crear Conserje/administrador', 'url'=>array('create')),
	array('label'=>'Administrar Conserje/administrador', 'url'=>array('admin')),
);
?>

<h1>Conserje/administrador </h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
