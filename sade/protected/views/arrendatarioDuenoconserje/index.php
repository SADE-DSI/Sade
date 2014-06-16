<?php
/* @var $this ArrendatarioduenoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arrendatarios/Dueños',
);

?>

<h1>Listado de Arrendatarios/Dueños</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
