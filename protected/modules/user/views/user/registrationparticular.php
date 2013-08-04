<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'registration-form',
	'enableAjaxValidation'=>true,
	//'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array('enctype'=>'multipart/form-data', 'class'=>'well'),
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	
	<?php echo $form->errorSummary(array($model,$profile)); ?>
	
	<?php echo $form->textFieldRow($model,'username'); ?>
	
	<?php echo $form->passwordFieldRow($model,'password'); ?>
	
	<?php //echo $form->labelEx($model,'password'); ?>
	<?php //echo $form->passwordField($model,'password'); ?>
	<?php //echo $form->error($model,'password'); ?>
	<!--
	<p class="hint">
	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
	</p>
	-->

	<?php echo $form->passwordFieldRow($model,'verifyPassword'); ?>
	<?php //echo $form->labelEx($model,'verifyPassword'); ?>
	<?php //echo $form->passwordField($model,'verifyPassword'); ?>
	<?php //echo $form->error($model,'verifyPassword'); ?>
	
	<?php echo $form->textFieldRow($model,'email'); ?>
	<?php //echo $form->labelEx($model,'email'); ?>
	<?php //echo $form->textField($model,'email'); ?>
	<?php //echo $form->error($model,'email'); ?>
	<?php echo $form->hiddenField($profile, 'id_tipo_vendedor', $htmlOptions=array('value'=>"1")); ?>
	
<?php /*
		$profileFields=Profile::getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
		<?php echo " Campos: ".$field->varname; ?>

		<?php echo $form->labelEx($profile,$field->varname); ?>
		<?php 
		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo $form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		 ?>
		<?php echo $form->error($profile,$field->varname); ?>

			<?php
			}
		}
	*/
?>
	<?php if (UserModule::doCaptcha('registration')): ?>

		<?php echo $form->labelEx($model,'verifyCode'); ?>
		
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		<?php echo $form->error($model,'verifyCode', array(),false); ?>
		
		
		<p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
		<br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>

	<?php endif; ?>
	
		<?php echo CHtml::submitButton(UserModule::t("Register")); ?>


<?php $this->endWidget(); ?>