<?php

namespace frontend\controllers;
use app\models\Essay;
use app\models\Tails;
use Yii;
//use yii\web\View;
//use yii\base\View;
use yii\web\View;

class IndexController extends \yii\web\Controller
{
    
    
    public $layout = true;
    public function actionIndex()
    {
//        这里缺少一个功能：如果是从错误页面跳转过来的，就goback
//        $beforeUrl = 
         $ContentModel = new Essay();
        $result = $ContentModel->details();
        var_dump($result);
//        die();
        
        $TailsModel = new Tails();
//         $view = Yii::$app->view;
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
          
        return $this->render('index',[
            'result' =>  $result,
        ]);
    }
    
    public function actionBlog() {
        $BlogModel = new Essay();
        $result = $BlogModel->details();
          
        $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
         $id = Yii::$app->request->get('id');
        return $this->render('blog',[
            'result' => $result
        ]);
    }
    
    public function actionFeatures(){
          $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
        return $this->render('features');
    }
    
    public function actionExperience(){
          $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
        return $this->render('experience');
    }
    
    public function actionContact(){
        if(Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            var_dump($post);
        }
          $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
        return $this->render('contact');
    }
    
    public function actionPhoto(){
          $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
        return $this->render('photo');
    }
    
    public function actionSingle() {
        
        $id = Yii::$app->request->get('id');
//        die();
        $SingleModel = new Essay();
        $result = $SingleModel->getInfoById($id);
//        var_dump($result);
//        die();
        $TailsModel = new Tails();
        Yii::$app->view->params['layoutData']= $TailsModel->getInfo();
        return $this->render("single",[
            'result' => $result
        ]);
    }
    
    

}
