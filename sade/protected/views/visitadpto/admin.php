<?php
/* @var $this VisitadptoController */
/* @var $model Visitadpto */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Visitas', 'url'=>array('index')),
	array('label'=>'Crear Visita', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#visitadpto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Visitas</h1>

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
	'id'=>'visitadpto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'viRut',
		'dlDireccion',
		'vdFechaIngreso',
		'caRut',
		'vdFechaSalida',
		array(
			'class'=>'CButtonColumn',
			'template' => '{view} {update} {salida}',
			 'buttons'=>array(
			 	'salida' => array(
			 		'label'=>'Registrar Salida', 
			 		'url'=>"CHtml::normalizeUrl(array('salidaVisita', 'id'=>\$data->vdCodigo))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/salida.jpg', 
			 		'options' => array('class'=>'pdf'),
			 	),
 			),
		),
	),
)); ?>
