<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Dpto/Local'=>array('index'),
	'Administrar',
);

/*$this->menu=array(
	array('label'=>'Listar Dpto/Local', 'url'=>array('index')),
	array('label'=>'Crear Dpto/Local', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dptolocal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Departamentos / Locales </h1>

<p>
Opcionalmente usted puede introducir operadores comparativos (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) en la primera fila de cada columna en la cual desea realizar la comparaci&oacute;n.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dptolocal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'dlDireccion',
		'dlMts2Construidos',
		'dlValorArriendo',
		'dlActivo',
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}{pdf}',
			 'buttons'=>array(
			 	'pdf' => array(
			 		'label'=>'Generar PDF', 
			 		'url'=>"CHtml::normalizeUrl(array('pdf','id'=>\$data->dlDireccion))",
			 		'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.gif', 
			 		'options' => array('class'=>'pdf'),
   					),
 			),
		),
	),
)); ?>
