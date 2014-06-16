<?php
/* @var $this EspaciocomunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Espacios Comunes',
);


if ( Yii::app()->user->isSuperAdmin) {
$this->menu=array(
	array('label'=>'Crear Espacio Común', 'url'=>array('create')),
	array('label'=>'Administrar Espacios Comunes', 'url'=>array('admin')),
);
 }

?>

<h1>Espacios Comunes</h1>
<hr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
