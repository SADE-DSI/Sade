<?php
/* @var $this DptolocalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Departamentos Locales',
);

$this->menu=array(
	array('label'=>'VER INFORME PDF DE LOS GASTOS COMUNES', 'url'=>array('pdf')),
);
?>

<h1>Dpto/Local</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
