<?php
/* @var $this ModeloController */
/* @var $data Modelo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_modelo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_modelo), array('view', 'id'=>$data->id_modelo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marca')); ?>:</b>
	<?php echo CHtml::encode($data->id_marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>