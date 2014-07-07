<?php
/* @var $this PersonaController */
/* @var $model Persona */
$activo=1;
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Empleados', 'url'=>array('index')),
	array('label'=>'Crear Empleado', 'url'=>array('create')),
	array('label'=>'Restaurar Empleados Eliminados', 'url'=>array('adminEliminados')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#persona-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Empleados</h1>


<!--
<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
-->
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'persona-grid',
	'dataProvider'=>$model->search($activo),
	'filter'=>$model,
	'columns'=>array(
		'peRut',
		'peNombresApellidos',
		'peEmail',
		'peTelefono',
		'peDescripcion',
		'peDireccion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
