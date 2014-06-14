<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Dpto/Locales'=>array('index'),
	$model->dlDireccion,
);

$this->menu=array(
	array('label'=>'VER INFORME GASTOS COMUNES', 'url'=>array('pdf', 'id'=>$model->dlDireccion)),
);
?>

<h1>Ver Dpto/Local <?php echo $model->dlDireccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dlDireccion',
		'dlMts2Construidos',
		'dlValorArriendo',
		'dlActivo',
	),
)); ?>
