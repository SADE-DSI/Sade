<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserjeadministradors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Conserjeadministrador', 'url'=>array('index')),
	array('label'=>'Create Conserjeadministrador', 'url'=>array('create')),
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

<h1>Manage Conserjeadministradors</h1>

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
	'id'=>'conserjeadministrador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'caRut',
		'caClave',
		array('name'=>'persona.peNombresApellidos','value'=>'$data->ca_pe->peNombresApellidos',
			'type'=>'text',),
		array('name'=>'persona.peActivo','value'=>'$data->ca_pe->peActivo',
			'type'=>'text',),
		array('name'=>'persona.peEmail','value'=>'$data->ca_pe->peEmail',
			'type'=>'text',),
		array('name'=>'persona.peTelefono','value'=>'$data->ca_pe->peTelefono',
			'type'=>'text',),
		array('name'=>'persona.peTipo','value'=>'$data->ca_pe->peTipo',
			'type'=>'text',),
		array('name'=>'persona.peDescripcion','value'=>'$data->ca_pe->peDescripcion',
			'type'=>'text',),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
