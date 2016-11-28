<?php

namespace frontend\controllers;

use frontend\models\Users;
use Yii;
use yii\helpers\Url;
use yii\web\User;
use frontend\models\SignupForm;
use app\models\Tails;

class UserController extends \yii\web\Controller {

//    用户信息首页
    public function actionIndex() {

//        if(Yii::$app->user->isGuest) {
//            return $this->redirect(Url::to([
//                '/user/signin',
//            ]));
//        }
//        
        $user_id = Yii::$app->user->identity->user_id;
        var_dump($user_id);
        die();
        $UserIndex = new Users();
        $userInfo = $UserIndex::find()->where([
            'user_id' => $user_id
        ])->one();
        var_dump($userInfo);
         $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
        return $this->render('index',[
            'userInfo' => $userInfo,
        ]);

        return $this->render("index");
    }

    /**
     * 注册页面。设计思路：先利用不连接数据表的SignupForm获取数据，得到post值以后，利用连接数据表的usersmodel向数据库写入数据
     */
    public function actionSignup() {

        if (!Yii::$app->user->isGuest) {
            return $this->redirect(Url::to([
                                '/user/index'
            ]));
        }

        $SignupModel = new SignupForm();
        $SignupModel->scenario = 'create';


        if (Yii::$app->request->getIsPost()) {
            $post = Yii::$app->request->post();
//            var_dump($post);
//            die();


//            如果和数据库验证成功，跳到后台index
            if ($SignupModel->load($post)) {
                if ($SignupModel->validate()) {
                    $SignupModel = new Users();
                    $SignupModel->scenario = 'create';
//                     为用户输入的密码加密
            $post['SignupForm']['password'] = md5($post['SignupForm']['password']);
                    $SignupModel->user_name = $post['SignupForm']['user_name'];
                    $SignupModel->password = $post['SignupForm']['password'];
                    $SignupModel->email = $post['SignupForm']['email'];
                    $SignupModel->save();
                  
                    return $this->redirect(Url::to(['user/signin']));
                }
            }
        }

         $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
        return $this->render("signup", [
                    'SignupModel' => $SignupModel,
        ]);
    }

    /**
     * 登录页面
     */
    public function actionSignin() {

        if (!Yii::$app->user->isGuest) {
            return $this->redirect(Url::to([
                '/user/index'
            ]));
        }

        $SigninModel = new Users();
        $SigninModel->scenario = 'create';
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
//            var_dump($post) . "<br>";
            $row = $SigninModel->Signin($post);
            $LoginSession = Yii::$app->session['LoginSession'] = $post['Users']['user_name'] . rand(0, 99999999);
//            var_dump($LoginSession);
//            如果验证成功，就跳转至用户中心
            if ($row == true) {
                Yii::$app->session->remove("LoginSession");
                return $this->redirect(Url::to(['/user/index']));
            } else {
                $SigninModel = new Users();
                $SigninModel->scenario = 'error';
                return $this->render("signin", [
                            'SigninModel' => $SigninModel,
                ]);
            }
        }
        $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
        return $this->render("signin", [
                    'SigninModel' => $SigninModel,
        ]);
    }

    /**
     * 忘记密码
     * @return type
     */
    public function actionForgetpwd() {
        $ForgetModel = new Users();
        $ForgetModel->scenario = 'update';

//        如果能查找到这个用户输入的数据，就修改密码
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
//            var_dump($post);
//            die();
            $row = $ForgetModel->forget($post);
            if ($row === true) {
                return $this->redirect(Url::toRoute([
                    "/user/modifypwd",
                    'name' => $post['Users']['user_name'],
                ]));
//                var_dump($post);
//                die();
            }else {
                //把提示的错误信息改成用户不存在
            }
        }

        $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
        return $this->render("forgetpwd", [
                    'ForgetModel' => $ForgetModel
        ]);
    }

    public function actionModifypwd() {
        $ModifyModel = new SignupForm();
        $ModifyModel->scenario = 'create';
        $name = Yii::$app->request->get('name');
//        var_dump($name);
//        die();
        
        if(Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
//            var_dump($post);
//            die();
            $password = $post['SignupForm']['password'];
            var_dump($password);
//            die();
//            $ModifyModel->ModifyPwd($name);
            $ModifyModel = new Users();
             $ModifyModel->scenario = 'create';
//            $row = $ModifyModel->getInfoByName($name,$password);
//            var_dump($row);
            
            $row = $ModifyModel->find()->where([
                'user_name' => $name
            ])->asArray()->all();
    var_dump($row);
    
    
//    写入密码，报错想不出来
//            $ModifyModel->password = $password;
//            $ModifyModel->save();
            die();
            
        }
        $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
        return $this->render("modifypwd", [
                    "ModifyModel" => $ModifyModel
        ]);
    }

}
