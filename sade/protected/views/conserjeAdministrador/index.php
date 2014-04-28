<?php
/* @var $this ConserjeadministradorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gestionar Conserjes',
);

$this->menu=array(
	array('label'=>'Create Conserjeadministrador', 'url'=>array('create')),
	array('label'=>'Manage Conserjeadministrador', 'url'=>array('admin')),
);
?>

<h1>Conserjes / Administrador </h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
