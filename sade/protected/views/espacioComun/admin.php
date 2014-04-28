<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Espacios Comúnes', 'url'=>array('index')),
	array('label'=>'Crear Espacio Común', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "s
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#espacio-comun-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Espacios Comunes</h1>

<?php #echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'espacio-comun-grid',
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
