<?php
/* @var $this EspaciocomunController */
/* @var $model Espaciocomun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	$model->ecCodigo,
);

if (Yii::app()->user->checkAccess('Conserje')) {

	$this->menu=array(
	array('label'=>'Lista de Espacios Comunes', 'url'=>array('index')), );
 }

if ( Yii::app()->user->isSuperAdmin) {
$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Modificar', 'url'=>array('update', 'id'=>$model->ecCodigo)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ecCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);}
?>

<h1>Ver Espacio Común:  <?php echo $model->ecCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ecCodigo',
		'ecDescripcion',
		'ecFrecuencia',
		//'ecActivo',
	),
)); ?>
