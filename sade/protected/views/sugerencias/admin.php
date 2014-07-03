<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerencias'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sugerencias-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Sugerencias</h1>

<?php echo CHtml::link('Búsqueda Avanzada','# ',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sugerencias-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'sgId',
		'sfComentario',
		'sfRespuesta',
		'sfLeido',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
