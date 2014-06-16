<?php
/* @var $this DptolocalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Departamentos Locales',
);

$this->menu=array(
	array('label'=>'Crear Dpto/Local', 'url'=>array('create')),
	array('label'=>'Administrar Dpto/Local', 'url'=>array('admin')),
 array('label'=>'Informe de Gastos Comunes Actual', 'url'=>array('pdf')),
  array('label'=>'Informe de Gastos Comunes Por Fecha', 'url'=>array('fecha')),
);
?>

<h1>Dpto/Local</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
