<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vehiculo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_vehiculo),array('view','id'=>$data->id_vehiculo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vendedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_vendedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->id_modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_traccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_traccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kilometraje')); ?>:</b>
	<?php echo CHtml::encode($data->kilometraje); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('color_ext')); ?>:</b>
	<?php echo CHtml::encode($data->color_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color_int')); ?>:</b>
	<?php echo CHtml::encode($data->color_int); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_combustible')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_combustible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condicion_vehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->condicion_vehiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transmision')); ?>:</b>
	<?php echo CHtml::encode($data->id_transmision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cilindros')); ?>:</b>
	<?php echo CHtml::encode($data->cilindros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accesorios')); ?>:</b>
	<?php echo CHtml::encode($data->accesorios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_vencimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_vencimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->id_ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	*/ ?>

</div>