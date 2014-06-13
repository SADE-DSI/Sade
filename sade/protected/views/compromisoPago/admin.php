<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */

$this->breadcrumbs=array(
	'Compromisopagos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#compromisopago-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar compromisos de pagos</h1>
<hr>


<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'compromisopago-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cpId',
		'cpCodigo',
		'cpFechaVencimiento',
		'cpMonto',
		'cpDescripcion',
		'cpFechaIngreso',
		/*
		'cpObs',
		'cpNumeroBoleta',
		'cpFechaRealPago',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
