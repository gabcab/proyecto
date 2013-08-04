<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");
$this->breadcrumbs=array(
	UserModule::t("Registration"),
);
?>

<h1><?php echo UserModule::t("Registration"); ?></h1>

<?php if(Yii::app()->user->hasFlash('registration')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('registration'); ?>
</div>
<?php else: ?>



<?php $this->widget('bootstrap.widgets.TbTabs', array(
    'type'=>'pills', // 'tabs' or 'pills'
    'htmlOptions'=>array('class'=>'well'),
    'tabs'=>array(
        array('label'=>'Particular', 
        	'content'=>$this->renderPartial('/user/registrationparticular', array('profile'=>$profile, 'model'=>$model), true),
        	'active'=>true
        ),
        array('label'=>'Dealer', 
        	'content'=>$this->renderPartial('/user/registrationdealer', array('profile'=>$profile, 'model'=>$model), true),
        ),
    ),
)); 
//hiddenField(string $name, string $value='', array $htmlOptions=array ( ))
?>




<?php endif; ?>

