<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */

$this->breadcrumbs=array(
	'Arrendatarios/Dueños'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Arrendatarios/Dueños', 'url'=>array('index')),
	array('label'=>'Crear Arrendatarios/Dueños', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#arrendatariodueno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Arrendatarios/Dueños</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'arrendatariodueno-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'adRut',
		'adClave',
		'adEstado',
		array('name'=>'persona.NombresApellidos','value'=>'$data->ad_pe->peNombresApellidos',
			'type'=>'text',),
		array('name'=>'persona.Activo','value'=>'$data->ad_pe->peActivo',
			'type'=>'text',),
		array('name'=>'persona.Email','value'=>'$data->ad_pe->peEmail',
			'type'=>'text',),
		array('name'=>'persona.Teléfono','value'=>'$data->ad_pe->peTelefono',
			'type'=>'text',),
		array('name'=>'persona.Descripción','value'=>'$data->ad_pe->peDescripcion',
			'type'=>'text',),
		array('name'=>'persona.Dirección','value'=>'$data->ad_pe->peDescripcion',
			'type'=>'text',),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
