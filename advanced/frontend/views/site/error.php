<?php

use yii\helpers\Html;
use yii\helpers\Url;
use Yii;

//$this->title = $name;
$this->title = "异次元";
?>


<div id="main" role="main" class="cf">

    <div class="cf"  style="margin-left: 30px; margin-top: 20px;" >
    <!--<h1><?= Html::encode($this->title) ?></h1>-->
    <h1>走丢啦！</h1>
        <div class="alert alert-danger">
       哦噢～～你好像找错地方了( •̥́ ˍ   •̀ू )
    </div>

    <p>
        真的不怪我，这里一点东西也没有
    </p>
    <p>
        如果你想看东西，请<b><a href="<?php echo Yii::$app->request->referrer;?>" style="color: #694e41;">返回</a></b>联系本人哦 ❀.(*´▽`*)❀.
    </p>
    </div>
</div>
    
