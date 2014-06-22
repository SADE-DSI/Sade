<?php
/* @var $this PersonaController */
/* @var $model Persona */
$activo=0;
$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Administrar Eliminados',
);

$this->menu=array(
	array('label'=>'Listar Empleados', 'url'=>array('index')),
	array('label'=>'Crear Empleado', 'url'=>array('create')),
	array('label'=>'Administrar Empleados', 'url'=>array('admin')),
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

<h1>Restaurar Empleados Eliminados</h1>


<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
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
			'template' => '{view}{Restaurar}',
	  		'buttons'=>array(
	    	'Restaurar' => array(
		      'label'=>'Restaurar Empleado Eliminado', 
		      'url'=>"CHtml::normalizeUrl(array('Restaurar', 'id'=>\$data->peRut))",
		      'imageUrl'=>Yii::app()->request->baseUrl.'/images/tick.png', 
		      'options' => array('class'=>'Restaurar'),
    ),
  ),
		),
	),
)); ?>
