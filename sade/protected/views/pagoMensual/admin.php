<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagomensuals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar pagos mensuales', 'url'=>array('index')),
	array('label'=>'Crear pago mensual', 'url'=>array('create')),
	array('label'=>'VER INFORME PDF', 'url'=>array('pdf')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pagomensual-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar pago mensual</h1>
<hr>



<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pagomensual-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pmCodigo',
		'dlDireccion',
		'pmFechaPago',
		'pmMonto',
		'pmObs',
		'pmFechaRealPago',
		/*
		'pmId',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
