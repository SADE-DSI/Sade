<?php
/* @var $this EspaciocomunController */
/* @var $model Espaciocomun */

$this->breadcrumbs=array(
	'Espacio Común'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Espacios Comunes', 'url'=>array('index')),
	array('label'=>'Crear Espacio Común', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#espaciocomun-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Espacios Comunes</h1>



<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'espaciocomun-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ecCodigo',
		'ecDescripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
