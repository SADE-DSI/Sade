<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Informe Dpto/Local'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Dpto/Local', 'url'=>array('index')),
	array('label'=>'Administrar Dpto/Local', 'url'=>array('admin')),
);
?>

<h1>Generar Informe de Gastos Comunes por Fecha</h1>

<?php $this->renderPartial('_formFecha', array('model'=>$model)); ?>