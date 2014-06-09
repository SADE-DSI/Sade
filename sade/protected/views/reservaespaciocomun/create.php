<?php
/* @var $this ReservaespaciocomunController */
/* @var $model Reservaespaciocomun */

$this->breadcrumbs=array(
	'Reservaespaciocomuns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reservaespaciocomun', 'url'=>array('index')),
	array('label'=>'Manage Reservaespaciocomun', 'url'=>array('admin')),
);
?>

<h1>Create Reservaespaciocomun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>