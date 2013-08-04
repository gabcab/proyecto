<h1>Editando Ciudad</h1>

<?php $form = $this->beginWidget('CActiveForm'); ?>
<div>
	<?php echo $form->labelEx($ciudad,'nombre'); ?>
	<?php echo $form->textField($ciudad,'nombre'); ?>
	<?php echo $form->error($ciudad,'nombre'); ?>
</div>
<?php echo CHtml::submitButton('Editar'); ?>
<?php $this->endWidget('CActiveForm'); ?>