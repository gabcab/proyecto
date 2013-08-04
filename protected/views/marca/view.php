<?php
$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->id_marca,
);

$this->menu=array(
	array('label'=>'List Marca','url'=>array('index')),
	array('label'=>'Create Marca','url'=>array('create')),
	array('label'=>'Update Marca','url'=>array('update','id'=>$model->id_marca)),
	array('label'=>'Delete Marca','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_marca),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Marca','url'=>array('admin')),
);
?>

<h1>View Marca #<?php echo $model->id_marca; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_marca',
		'nombre',
		'descripcion',
		'imagen',
	),
)); ?>
