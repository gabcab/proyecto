<?php
$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->id_vehiculo,
);

$this->menu=array(
	array('label'=>'List Vehiculo','url'=>array('index')),
	array('label'=>'Create Vehiculo','url'=>array('create')),
	array('label'=>'Update Vehiculo','url'=>array('update','id'=>$model->id_vehiculo)),
	array('label'=>'Delete Vehiculo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vehiculo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vehiculo','url'=>array('admin')),
);
?>

<h1>View Vehiculo #<?php echo $model->id_vehiculo; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_vehiculo',
		'id_vendedor',
		'id_modelo',
		'id_traccion',
		'year',
		'precio',
		'kilometraje',
		'color_ext',
		'color_int',
		'id_tipo_combustible',
		'condicion_vehiculo',
		'id_transmision',
		'cilindros',
		'accesorios',
		'comentario',
		'fecha_creacion',
		'fecha_vencimiento',
		'id_ciudad',
		'activo',
	),
)); ?>
