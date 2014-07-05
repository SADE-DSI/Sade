<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */
$activo=1;
$this->breadcrumbs=array(
	'Arrendatarios/Dueños'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Arrendatarios/Dueños', 'url'=>array('index')),
	array('label'=>'Crear Arrendatarios/Dueños', 'url'=>array('create')),
	array('label'=>'Restaurar Arrendatarios/Dueños Eliminados', 'url'=>array('adminEliminados')),
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
	'dataProvider'=>$model->search($activo),
	'filter'=>$model,
	'columns'=>array(
		'adRut',
		array('name'=>'nombres','header'=>'Nombre Completo','value'=>'$data->ad_pe->peNombresApellidos',
			'type'=>'text',),
		array('name'=>'direccion','header'=>'Dirección','value'=>'$data->ad_pe->peDireccion',
			'type'=>'text',),
		array('name'=>'email','header'=>'Email','value'=>'$data->ad_pe->peEmail',
			'type'=>'text',),
		array('name'=>'telefono','header'=>'Teléfono','value'=>'$data->ad_pe->peTelefono',
			'type'=>'text',),
		array('name'=>'descripcion','header'=>'Descripción','value'=>'$data->ad_pe->peDescripcion',
			'type'=>'text',),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
