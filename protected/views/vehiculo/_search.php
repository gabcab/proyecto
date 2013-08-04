<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_vehiculo',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'id_vendedor',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_modelo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_traccion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'year',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'precio',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kilometraje',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'color_ext',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'color_int',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'id_tipo_combustible',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'condicion_vehiculo',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'id_transmision',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cilindros',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'accesorios',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'comentario',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'fecha_creacion',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'fecha_vencimiento',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'id_ciudad',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'activo',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
