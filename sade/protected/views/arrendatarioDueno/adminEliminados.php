<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */
$activo=0;
$this->breadcrumbs=array(
	'Arrendatarios/Dueños'=>array('index'),
	'Administrar Eliminados',
);

$this->menu=array(
	array('label'=>'Listar Arrendatarios/Dueños', 'url'=>array('index')),
	array('label'=>'Crear Arrendatarios/Dueños', 'url'=>array('create')),
		array('label'=>'Administrar Arrendatarios/Dueños', 'url'=>array('admin')),
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

<h1>Restaurar Arrendatarios/Dueños Eliminados</h1>

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
		array('name'=>'nombres','header'=>'Nombres Apellidos','value'=>'$data->ad_pe->peNombresApellidos',
			'type'=>'text',),
		array('name'=>'email','header'=>'Email','value'=>'$data->ad_pe->peEmail',
			'type'=>'text',),
		array('name'=>'telefono','header'=>'Teléfono','value'=>'$data->ad_pe->peTelefono',
			'type'=>'text',),
		array('name'=>'descripcion','header'=>'Descripción','value'=>'$data->ad_pe->peDescripcion',
			'type'=>'text',),
		array('name'=>'direccion','header'=>'Dirección','value'=>'$data->ad_pe->peDescripcion',
			'type'=>'text',),
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}{Restaurar}',
	  		'buttons'=>array(
	    	'Restaurar' => array(
		      'label'=>'Restaurar Usuario Eliminado', 
		      'url'=>"CHtml::normalizeUrl(array('Restaurar', 'id'=>\$data->adRut))",
		      'imageUrl'=>Yii::app()->request->baseUrl.'/images/tick.png', 
		      'options' => array('class'=>'Restaurar'),
    ),
  ),
		),
	),
)); ?>
