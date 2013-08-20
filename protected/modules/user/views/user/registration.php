<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");
$this->breadcrumbs=array(
	UserModule::t("Registration"),
);
?>

<?php 
/* ================================================== */
// Include the client scripts
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();

$cs->registerScript('helpers', '
        baseAjaxUrl = '.CJSON::encode(Yii::app()->createUrl('/user/registration/registrationformajax')).';
        baseUrl = '.CJSON::encode(Yii::app()->baseUrl).';
');

$cs->registerScriptFile($baseUrl.'/js/login.js');
//$cs->registerCssFile($baseUrl.'/css/yourcss.css');
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
        	'content'=>$this->renderPartial('/user/registrationdealer', array('profile'=>$profile, 'model'=>$model, 'isDealer'=>false, 'tipo_vendedor'=>1), true),
        	'active'=>true
        ),
        array('label'=>'Dealer', 
        	'content'=>"",
        ),   
    ),'events'=>array('shown'=>'js:cargarContenido'),
)); 
//hiddenField(string $name, string $value='', array $htmlOptions=array ( ))
?>




<?php endif; ?>
