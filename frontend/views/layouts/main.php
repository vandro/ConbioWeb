<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
#use yii\bootstrap\Nav;
#use yii\bootstrap\NavBar;
#use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

#AppAsset::register($this);

$asset = AppAsset::register($this);
$baseUrl = $asset->baseUrl;
//    dmstr\web\AdminLteAsset::register($this);
//    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="theme/fullpage/assets/images/logo.png" type="image/x-icon">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrapper">
            <div class="box">
                <div class="row row-offcanvas row-offcanvas-left">


                    <?php /* ?>
                      <!-- sidebar -->
                      <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

                      <ul class="nav">
                      <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                      </ul>

                      <ul class="nav hidden-xs" id="lg-menu">
                      <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Featured</a></li>
                      <li><a href="#stories"><i class="glyphicon glyphicon-list"></i> Stories</a></li>
                      <li><a href="#"><i class="glyphicon glyphicon-paperclip"></i> Saved</a></li>
                      <li><a href="#"><i class="glyphicon glyphicon-refresh"></i> Refresh</a></li>
                      </ul>
                      <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                      <li>
                      <a href="http://www.bootply.com"><h3>Bootstrap</h3> <i class="glyphicon glyphicon-heart-empty"></i> Bootply</a>
                      </li>
                      </ul>

                      <!-- tiny only nav-->
                      <ul class="nav visible-xs" id="xs-menu">
                      <li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                      <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
                      <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
                      <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
                      </ul>

                      </div>
                      <!-- /sidebar -->
                      <!-- main right col -->
                      <div class="column col-sm-10 col-xs-11" id="main">

                      <?php */ ?>                
                    <!-- main right col -->
                    <div class="column col-sm-12 col-xs-12" id="main">
                        <!-- top nav -->
                        <div class="navbar navbar-blue navbar-static-top">  
                            <div class="navbar-header">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                
                                <?= Html::a('<img style="width: 22px; height: 22px;" alt="logo" src="theme/fullpage/assets/images/logo.png">', ['/'], ['class' => "navbar-brand logo"]) ?>
                                <!--<a href="" class="navbar-brand logo">C</a>-->
                            </div>
                            <nav class="collapse navbar-collapse" role="navigation">
                                <form class="navbar-form navbar-left">
                                    <div class="input-group input-group-sm" style="max-width:360px;">
                                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <ul class="nav navbar-nav">
                                    <li>
                                        <?= Html::a('<i class="glyphicon glyphicon-home"></i> Home', ['/']) ?>
<!--                                        <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>-->
                                    </li>
                                    <li>
                                        <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                                    </li>
<!--                                    <li>
                                        <a href="#"><span class="badge">badge</span></a>
                                    </li>-->
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                                        <ul class="dropdown-menu">                                            
                                            <li>
                                                <?= Html::a('Logout', ['//user/logout'], ['data-method' => "post"]) ?>
                                            </li>
                                            <li>
                                                <?= Html::a('Profile', ['//user/view-profile']) ?>
                                            </li>
<!--                                            <li><a href="">More</a></li>
                                            <li><a href="">More</a></li>
                                            <li><a href="">More</a></li>-->
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <?php
// \yii\bootstrap\NavBar::begin([
//        'brandLabel' => 'My Company',
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//    $menuItems[] =
//    Yii::$app->user->isGuest ?
//        ['label' => 'Login', 'url' => ['/user/login']] : // or ['/user/login-email']
//        ['label' => 'Logout (' . Yii::$app->user->displayName . ')',
//            'url' => ['/user/logout'],
//            'linkOptions' => ['data-method' => 'post']];
//    echo yii\bootstrap\Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => $menuItems,
//    ]);
//    \yii\bootstrap\NavBar::end();
                            ?>

                        </div>
                        <!-- /top nav -->

                        <div class="padding">
                            <div class="full col-sm-9">

                                <!-- content -->


                                <?= Alert::widget() ?>
                                <?= $content ?>


<!--                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                                    </div>
                                </div>

                                <div class="row" id="footer">    
                                    <div class="col-sm-6">

                                    </div>
                                    <div class="col-sm-6">
                                        <p>
                                            <a href="#" class="pull-right">©Copyright 2013</a>
                                        </p>
                                    </div>
                                </div>

                                <hr>

                                <h4 class="text-center">
                                    <a href="http://bootply.com/96266" target="ext">Download this Template @Bootply</a>
                                </h4>

                                <hr>-->


                            </div><!-- /col-9 -->
                        </div><!-- /padding -->
                    </div>
                    <!-- /main -->

                </div>
            </div>
        </div>


        <!--post modal-->
        <div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        Update Status
                    </div>
                    <div class="modal-body">
                        <form class="form center-block">
                            <div class="form-group">
                                <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
                            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
                        </div>	
                    </div>
                </div>
            </div>
        </div>

        <?php /* ?>
          <div class="wrap">
          <?php
          NavBar::begin([
          'brandLabel' => 'My Company',
          'brandUrl' => Yii::$app->homeUrl,
          'options' => [
          'class' => 'navbar-inverse navbar-fixed-top',
          ],
          ]);
          $menuItems = [
          ['label' => 'Home', 'url' => ['/site/index']],
          ['label' => 'About', 'url' => ['/site/about']],
          ['label' => 'Contact', 'url' => ['/site/contact']],
          ];
          if (Yii::$app->user->isGuest) {
          $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
          $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
          } else {
          $menuItems[] = '<li>'
          . Html::beginForm(['/site/logout'], 'post')
          . Html::submitButton(
          'Logout (' . Yii::$app->user->identity->username . ')',
          ['class' => 'btn btn-link logout']
          )
          . Html::endForm()
          . '</li>';
          }
          echo Nav::widget([
          'options' => ['class' => 'navbar-nav navbar-right'],
          'items' => $menuItems,
          ]);
          NavBar::end();
          ?>

          <div class="container">
          <?= Breadcrumbs::widget([
          'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
          ]) ?>
          <?= Alert::widget() ?>
          <?= $content ?>
          </div>
          </div>

          <footer class="footer">
          <div class="container">
          <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

          <p class="pull-right"><?= Yii::powered() ?></p>
          </div>
          </footer>

          <?php */ ?>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>