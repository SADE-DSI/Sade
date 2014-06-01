<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserje/administrador'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Conserje/administrador', 'url'=>array('index')),
	array('label'=>'Crear Conserje/administrador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#conserjeadministrador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Conserje/administrador</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'conserjeadministrador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'caRut',
		'caClave',
		array('name'=>'persona.NombresApellidos','value'=>'$data->ca_pe->peNombresApellidos',
			'type'=>'text',),
		array('name'=>'persona.Activo','value'=>'$data->ca_pe->peActivo',
			'type'=>'text',),
		array('name'=>'persona.Email','value'=>'$data->ca_pe->peEmail',
			'type'=>'text',),
		array('name'=>'persona.Teléfono','value'=>'$data->ca_pe->peTelefono',
			'type'=>'text',),
		array('name'=>'persona.Descripción','value'=>'$data->ca_pe->peDescripcion',
			'type'=>'text',),
		array('name'=>'persona.Dirección','value'=>'$data->ca_pe->peDescripcion',
			'type'=>'text',),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
