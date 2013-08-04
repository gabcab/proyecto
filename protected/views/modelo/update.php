<?php
/* @var $this ModeloController */
/* @var $model Modelo */

$this->breadcrumbs=array(
	'Modelos'=>array('index'),
	$model->id_modelo=>array('view','id'=>$model->id_modelo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Modelo', 'url'=>array('index')),
	array('label'=>'Create Modelo', 'url'=>array('create')),
	array('label'=>'View Modelo', 'url'=>array('view', 'id'=>$model->id_modelo)),
	array('label'=>'Manage Modelo', 'url'=>array('admin')),
);
?>

<h1>Update Modelo <?php echo $model->id_modelo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>