<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form 这里主管在数据表里面没有，但是在注册视图界面有的输入框的内容
 */
class SignupForm extends Model
{
    public $user_name;
    public $email;
    public $password;
    public $password_repeat;
    public $verify;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            ['user_name', 'unique','targetClass' => 'frontend\models\Users', 'message' => '用户名已存在','on' => 'create'],
            ['user_name', 'required', 'message' => '请输入用户名','on' => 'create'],
            ['user_name', 'required', 'message' => '请填写注册时的用户名！', 'on' => 'update'],
            
            ['password', 'required', 'message' => '请输入密码','on' => 'create'],
            ['password', 'string', 'min' => 6, 'tooShort' => '密码不能少于6位'],
            ['password','string','message' => '用户名或密码输入错误！','on' => 'error'],
            
            ['password_repeat', 'required','message' => '请再次确认密码','on' => 'create'],
            ['password_repeat', 'string','min'=> 6,'tooShort' => '密码不能少于6位'],
            ['password_repeat','compare','compareAttribute'=>'password','message' => '两次密码不一致','on' => 'create'],
            
            ['email', 'required', 'message' => '请输入邮箱', 'on' => 'create'],
            ['email', 'required', 'message' => '请输入注册时的邮箱', 'on' => 'update'],
            ['email', 'email', 'message' => '邮箱格式不正确'],
            ['email','unique','targetClass' => 'frontend\models\Users','message' => '邮箱已存在'],
            [['user_name', 'email','password'], 'trim'],
            
            
            ['verify','captcha','message' => '验证码错误'],
            ['verify','required','message' => '请输入验证码'],
        ];
    }
    
     public function scenarios()
{
	return [
            'create' => ['user_name', 'password', 'email','password_repeat','verify'],
            'update' => ['user_name','email'],
        ];
}
    
     public function attributeLabels() {
        return [
             'user_id' => 'User ID',
            'email' => '邮箱',
            'user_name' => '用户名',
            'password' => '密码',
            'password_repeat' => '确认密码',
            'verify' => '验证码',
        ];
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
