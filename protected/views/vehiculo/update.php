<?php
$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->id_vehiculo=>array('view','id'=>$model->id_vehiculo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vehiculo','url'=>array('index')),
	array('label'=>'Create Vehiculo','url'=>array('create')),
	array('label'=>'View Vehiculo','url'=>array('view','id'=>$model->id_vehiculo)),
	array('label'=>'Manage Vehiculo','url'=>array('admin')),
);
?>

<h1>Update Vehiculo <?php echo $model->id_vehiculo; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>