<?php
/* @var $this ArrendatarioDuenoController */
/* @var $model ArrendatarioDueno */
$persona= new Persona;
$this->breadcrumbs=array(
	'Arrendatario Duenos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ArrendatarioDueno', 'url'=>array('index')),
	array('label'=>'Create ArrendatarioDueno', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#arrendatario-dueno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Arrendatarios/Dueños</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'arrendatario-dueno-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'adRut',
		'adClave',
		'adEstado',
		'adFechaLiberacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
