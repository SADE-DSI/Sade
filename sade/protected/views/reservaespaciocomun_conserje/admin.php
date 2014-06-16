<?php
/* @var $this Reservaespaciocomun_conserjeController */
/* @var $model Reservaespaciocomun */

$this->breadcrumbs=array(
	'Reserva espacio común'=>array('index'),
	'Administrar',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#reservaespaciocomun-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Reservas</h1>


<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reservaespaciocomun-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'reFechaInicio',
		'adRut',
		'ecCodigo',
		'reFechaFin',
		
	),
)); ?>
