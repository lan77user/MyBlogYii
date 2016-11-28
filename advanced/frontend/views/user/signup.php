<?php 
use yii\widgets\ActiveForm;
use app\models\Users;
use yii\helpers\Html;
use yii\captcha\Captcha;
$this->title = "注册";
?>
<?php echo HTML::cssFile("@web/css/style.css", ['type' => 'text/css', 'media' => 'all']); ?>
<?php echo HTML::cssFile("@web/bootstrap/css/root.css", ['type' => 'text/css']); ?>

<style>
    input {
        margin-top: 10px;
        margin-bottom: 10px;
        overflow: hidden;
        padding: 10px 15px;
        width: 642px;
        background: #eaeaea;
        color: #484848;
        border: 1px solid #ccc;
        font-size: 14px;
        font-family: Tahoma, Arial;
        line-height: 1.5em;
        margin: 0;
        vertical-align: baseline;
        text-shadow: 0px 1px 0 rgba(255, 255, 255, 0.9);
    }
    .error {
        color: red;
    }
   
</style>

<div id="main" role="main" class="cf">
    <div style="margin-left: 30px; margin-top: 15px;">
    <h2>注册你的账号</h2>
    <div>
    <?php $form = ActiveForm::begin([
        'id' => 'contactForm',
        'fieldConfig' => [
            'labelOptions' => ['for' => 'name'],
            'inputOptions' => ['class' => 'input'],
            'errorOptions' => ['class' => 'error']
        ],
        ]);
    ?>
    
    <?php echo $form->field($SignupModel, 'user_name');?>
        
    <?php echo $form->field($SignupModel, 'password')->passwordInput();?>
    
    <?php echo $form->field($SignupModel, 'password_repeat')->passwordInput();?>
        
    <?php echo $form->field($SignupModel,'email');?>
        
    <?php echo $form->field($SignupModel, 'verify')->widget(Captcha::className(), []) ?>
        
    
  
    <?= Html::submitButton('注册', ['class' => 'btn btn-primary']);?>
    <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
