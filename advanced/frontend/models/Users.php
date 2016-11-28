<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%myblog_users}}".
 *
 * @property string $user_id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $question
 * @property string $answer
 * @property integer $sex
 * @property string $birthday
 * @property string $user_money
 * @property string $frozen_money
 * @property string $pay_points
 * @property string $rank_points
 * @property string $address_id
 * @property string $reg_time
 * @property string $last_login
 * @property string $last_time
 * @property string $last_ip
 * @property integer $visit_count
 * @property integer $user_rank
 * @property integer $is_special
 * @property string $ec_salt
 * @property string $salt
 * @property integer $parent_id
 * @property integer $flag
 * @property string $alias
 * @property string $msn
 * @property string $qq
 * @property string $office_phone
 * @property string $home_phone
 * @property string $mobile_phone
 * @property integer $is_validated
 * @property string $credit_line
 * @property string $passwd_question
 * @property string $passwd_answer
 */
class Users extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%myblog_users%}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['user_name', 'unique', 'message' => '用户名已存在','on' => 'create'],
            ['user_name', 'required', 'message' => '请输入用户名','on' => 'create'],
            ['user_name', 'required', 'message' => '请填写注册时的用户名！', 'on' => 'update'],
//            ['user_name','validatePassword','on' => 'update'],
            
            ['password', 'required', 'message' => '请输入密码'],
            ['password', 'string', 'min' => 6, 'tooShort' => '密码不能少于6位'],
            ['password','string','message' => '用户名或密码输入错误！','on' => 'error'],
            
            
            ['email', 'required', 'message' => '请输入邮箱', 'on' => 'create'],
            ['email', 'required', 'message' => '请输入注册时的邮箱', 'on' => 'update'],
            ['email', 'email', 'message' => '邮箱格式不正确'],
//            [['user_name', 'email','password'], 'trim'],
//            [['sex', 'pay_points', 'rank_points', 'address_id', 'reg_time', 'last_login', 'visit_count', 'user_rank', 'is_special', 'parent_id', 'flag', 'is_validated'], 'integer'],
//            [['birthday', 'last_time'], 'safe'],
//            [['user_money', 'frozen_money', 'credit_line'], 'number'],
//            [['alias', 'msn', 'qq', 'office_phone', 'home_phone', 'mobile_phone', 'credit_line'], 'required'],
//            [['email', 'username', 'alias', 'msn'], 'string', 'max' => 60],
//            [['password'], 'string', 'max' => 32],
//            [['question', 'answer', 'passwd_answer'], 'string', 'max' => 255],
//            [['last_ip'], 'string', 'max' => 15],
//            [['ec_salt', 'salt'], 'string', 'max' => 10],
//            [['qq', 'office_phone', 'home_phone', 'mobile_phone'], 'string', 'max' => 20],
//            [['passwd_question'], 'string', 'max' => 50],
//          
        ];
    }
    
    /**
     * 场景验证
     * @return string
     */
    public function scenarios()
{
	return [
            'create' => ['user_name', 'password', 'email'],
            'update' => ['user_name','email'],
        ];
}

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'user_id' => 'User ID',
            'email' => '邮箱',
            'user_name' => '用户名',
            'password' => '密码',
             'question' => 'Question',
            'answer' => 'Answer',
            'sex' => 'Sex',
            'birthday' => 'Birthday',
            'user_money' => 'User Money',
            'frozen_money' => 'Frozen Money',
            'pay_points' => 'Pay Points',
            'rank_points' => 'Rank Points',
            'address_id' => 'Address ID',
            'reg_time' => 'Reg Time',
            'last_login' => 'Last Login',
            'last_time' => 'Last Time',
            'last_ip' => 'Last Ip',
            'visit_count' => 'Visit Count',
            'user_rank' => 'User Rank',
            'is_special' => 'Is Special',
            'ec_salt' => 'Ec Salt',
            'salt' => 'Salt',
            'parent_id' => 'Parent ID',
            'flag' => 'Flag',
            'alias' => 'Alias',
            'msn' => 'Msn',
            'qq' => 'Qq',
            'office_phone' => 'Office Phone',
            'home_phone' => 'Home Phone',
            'mobile_phone' => 'Mobile Phone',
            'is_validated' => 'Is Validated',
            'credit_line' => 'Credit Line',
            'passwd_question' => 'Passwd Question',
            'passwd_answer' => 'Passwd Answer',
        ];
    }
    
    

    /**
     * 登录，把前台post过来的数据和后台进行验证，通过用户名和密码进行验证
     * @param type $post
     */
    public function Signin($post) {
        $username = $post['Users']['user_name'];
        $password = md5($post['Users']['password']);
        
//        如果能查询到这条记录，那用户就是存在，但是密码要一致
        $row = $this::find()->where([
                    "user_name" => $username
                ])->one();
       
        if(!$row) {
            return false;
        }if($password != $row['password']){
            return false;
            }
     
        return true;
    }
    
    
    /**
     * 忘记密码，必须输入注册时的用户名和邮箱，才能进入修改密码界面
     */
    public function Forget($post) {
        $username = $post['Users']['user_name'];
        $email = $post['Users']['email'];
        
        $row = $this::find()->where([
            "user_name" => $username
        ])->asArray()->one();
//var_dump($row);
//die();

        if($row && $email == $row['email']) {
            return true;
        }else {
            return false; 
        }
//        $check_username = $row->user_name;
//        $check_email = $row->email;
        
//        if(($username == $check_username) &&($email == $check_email)) {
//            return true;
//        }else {
//            return false;
//        }
    }
    
    
//    通过url获取的name值，来修改对应的用户的密码
    public function getInfoByName($name, $password) {
        $row = $this->find()->where([
            'user_name' => $name
        ])->asArray()->one();
//var_dump($row);
        $row['password'] = $password;
        $row->save();
        return $row;
    }
    
    
    public function validateForgetPwd()
    {
        $user = User::findByUsername($this->user_name);

        if (!$user || !$user->validatePassword($this->password)) {
            $this->addError('user_name', '用户名不存在！');
        }
    }
    
     public function validatePassword()
    {
        $user = User::findByUsername($this->user_name);

        if (!$user || !$user->validatePassword($this->password)) {
            $this->addError('user_name', '用户名和密码不存在！');
        }
    }
}
