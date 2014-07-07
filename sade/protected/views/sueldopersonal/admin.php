<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */

$this->breadcrumbs=array(
	'Sueldo Personal'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Sueldo Personal', 'url'=>array('index')),
	array('label'=>'Crear Sueldo Personal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sueldopersonal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Sueldo Personal</h1>

<p>
Opcionalmente usted puede introducir operadores comparativos (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) en la primera fila de cada columna en la cual desea realizar la comparaci&oacute;n.
</p>

<!--
<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
-->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sueldopersonal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			   'name'=>'peNombresApellidos',
			   'value'=>'$data->getNombre($data->cpCodigo)',
			),
		'spFechaPago',
		array(
			   'name'=>'spSueldoLiquido',
			   'value'=>'$data->getSueldoLiquido($data->cpCodigo, $data->spCodigo)', 
			),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
