<?php
/* @var $this ContratopersonalController */
/* @var $model Contratopersonal */

$this->breadcrumbs=array(
	'Contrato Personal'=>array('index'),
	$model->peRut,
);

$this->menu=array(
	array('label'=>'Listar Contrato Personal', 'url'=>array('index')),
	array('label'=>'Crear Contrato Personal', 'url'=>array('create')),
	array('label'=>'Actualizar Contrato Personal', 'url'=>array('update', 'id'=>$model->cpCodigo)),
	array('label'=>'Borrar Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cpCodigo),'confirm'=>'¿Está seguro que desea borrar este dato?')),
	array('label'=>'Administrar Contrato Personal', 'url'=>array('admin')),
);
?>

<h1>Contrato Empleado(a) <?php echo $model->getNombre($model->peRut); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cpCodigo',
		'peRut',
		'cpAFPNombre',
		'cpAFPMonto',
		'cpPrevisionNombre',
		'cpPrevisionMonto',
		'cpSueldoBruto',
		'cpFechaInicio',
		'cpFechaFin',
		'cpValorHoraExtra',
	),
)); ?>

<div class="row buttons">
	<?php echo CHtml::link('Ingresar Pago de Sueldo', array('/Sueldopersonal/create', 'id'=>$model->cpCodigo)); ?>
</div>
