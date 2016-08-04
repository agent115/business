
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<!-- <script type="text/javascript" src="путь_к_скачанному_файлу/jquery.js">
</script> -->
	<meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <div class="col-sm-2">
    	<form action=" <?=yii\helpers\Url::to(['category/search'])?>">
    		<input type="text" placeholder="ПОИСК" name='q'>
                 <button type="button" class="btn btn-info "><a href="<?=  yii\helpers\Url::to(['/admin'])?>">АДМИНКА</a></button>
                <?php if(!Yii::$app->user->isGuest):?>
                <button type="button" class="btn btn-danger"><a href="<?= yii\helpers\Url::to(['/site/logout'])?>">
                        <?= Yii::$app->user->identity['username']?> Выход</a></button>
                <?php endif;?>
    	</form>
    </div>


</head>

<body>
    <?php $this->beginBody() ?>
<header>
	
<div class="container">
	<div class="row">
		
			<div class="col-md-offset-3 col-md-2  col-xm-2 ">
                            <a href="<?=  \yii\helpers\Url::home()?>"><img src="/web/images/logo.png" class="logo"></a>
			</div>

			
		
	</div>

	<div class="row">
		<div class="col-md-5 col-md-offset-3 navbar-default ">
				<ul class="nav nav-tabs">
                  <li class="dropdown"> <a href="">Главная</a></li>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Категории <span class="caret"></span>
                   </a>
                   <ul class="dropdown-menu">
                     <a href="">Категории</a>
                   </ul>
                </li>
                  <li> <a href="">Новости</a></li>
                   <li> <a href="">О нас</a></li>
                   
                 </ul>
                    
			</div>
            
	</div>
</div>
    
</header>

<?= $content ?>
    
<footer>
	
	<div class=".container-fluid">
		<div class="footer">
			 

		</div>
	</div>
</footer>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>