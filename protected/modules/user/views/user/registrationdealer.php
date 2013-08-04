<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'registration-form-dealer',
	'action' => Yii::app()->createUrl("/autosdo/index.php?r=user/registrationdealer"),
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	
	<?php echo $form->errorSummary(array($model,$profile)); ?>
	
	<?php echo $form->textFieldRow($model,'username'); ?>
	
	<?php echo $form->passwordFieldRow($model,'password'); ?>

	<?php echo $form->passwordFieldRow($model,'verifyPassword'); ?>
	
	<?php echo $form->textFieldRow($model,'email'); ?>
	
	<?php echo $form->hiddenField($profile, 'id_tipo_vendedor', $htmlOptions=array('value'=>"2")); ?>
<?php 
		$profileFields=Profile::getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
				if($field->varname=="id_tipo_vendedor")
					continue;
			?>

		<?php echo $form->labelEx($profile,$field->varname); ?>
		<?php 
		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo$form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		 ?>
		<?php echo $form->error($profile,$field->varname); ?>

			<?php
			}
		}
?>
	<?php if (UserModule::doCaptcha('registration')): ?>

		<?php echo $form->labelEx($model,'verifyCode'); ?>
		
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		<?php //echo $form->error($model,'verifyCode'); ?>
		<?php echo $form->error($model,'verifyCode', array(),false); ?>
		
		<p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
		<br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>

	<?php endif; ?>
	
		<?php echo CHtml::submitButton(UserModule::t("Register")); ?>


<?php $this->endWidget(); ?>