<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */

$this->breadcrumbs=array(
	'Arrendatarioduenos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Arrendatariodueno', 'url'=>array('index')),
	array('label'=>'Create Arrendatariodueno', 'url'=>array('create')),
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

<h1>Manage Arrendatarioduenos</h1>

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
	'id'=>'arrendatariodueno-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'adRut',
		'adClave',
		'adEstado',
		'adFechaLiberacion',
		array('name'=>'persona.peNombresApellidos','value'=>'$data->ad_pe->peNombresApellidos',
			'type'=>'text',),
		array('name'=>'persona.peActivo','value'=>'$data->ad_pe->peActivo',
			'type'=>'text',),
		array('name'=>'persona.peEmail','value'=>'$data->ad_pe->peEmail',
			'type'=>'text',),
		array('name'=>'persona.peTelefono','value'=>'$data->ad_pe->peTelefono',
			'type'=>'text',),
		array('name'=>'persona.peDescripcion','value'=>'$data->ad_pe->peDescripcion',
			'type'=>'text',),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
