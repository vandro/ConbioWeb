<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use amnah\yii2\user\helpers\Timezone;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var amnah\yii2\user\models\Profile $profile
 */

$this->title = Yii::t('user', 'Profile');
$this->params['breadcrumbs'][] = $this->title;
?>






<div>
<!--    <div class="portlet-content">
        <ul class="nav nav-pills">
            <li>
                <a href="<?= Yii::$app->urlManager->createUrl(['user/edit-profile']) ?>">
                    <i class="fa fa-edit"></i> <?=Yii::t('app', 'Edit Profile') ?>
                </a>
            </li>
            <li>
                <a href="<?= Yii::$app->urlManager->createUrl(['user/index']) ?>">
                    <i class="fa fa-user"></i> <?=Yii::t('app', 'Admin Users') ?>
                </a>
            </li>
        </ul>
    </div>-->
</div>
<div class="row-fluid">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">
                    <span class="fa fa-user padding-left-sm"></span> 
                    <?=' '.Yii::t('app', 'My Profile') ?>
                    <a  class="btn btn-default" style="float: right;" href="<?= Yii::$app->urlManager->createUrl(['user/profile']) ?>">
                        <i class="fa fa-edit"></i> <?=Yii::t('app', 'Edit Profile') ?>
                    </a>
                    <a  class="btn btn-default" style="float: right;" href="<?= Yii::$app->urlManager->createUrl(['user/account']) ?>">
                        <i class="fa fa-edit"></i> <?=Yii::t('app', 'Edit Account') ?>
                    </a>
                </div>
                <ul class="nav panel-tabs">
<!--                    <li class="active"><a data-toggle="tab" href="#tab2">Habilitado</a></li>
                    <li class=""><a data-toggle="tab" href="#tab1">Deshabilitado</a></li>-->
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content padding-none border-none">
                    <div class="tab-pane active" id="tab1">
                        <div class="clearfix"></div>
                        <div class="cover">
                            <img class="banner-img" src=<?=Yii::getAlias("@web").'/uploads/cover-bg.jpg'?> alt="" />
                            <img class="profile-pic" src="<?=$profile->photo?>" alt="profile" />

                            <div class="profile-btn"></div>
                        </div>
                        <div class="row-fluid">
                            <div class="">
                                <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6">
                                    <div class="block">          
                                        <h2><?=Yii::t('app', 'About me') ?></h2>
                                        <div class="config"> 
                                            <a href="#" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                                <i class="icon-wrench"></i>
                                            </a>
                                        </div>           
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <i class="fa fa-user pull-left"></i> 
                                                    <div class="media-body">
                                                        <?=Yii::t('app', 'Name').' : '.$profile->full_name?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <i class="fa fa-credit-card pull-left"></i> 
                                                    <div class="media-body">
                                                        <?php //=$modelPerson->getAttributeLabel('identity_card').' : '.$modelPerson->identity_card ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <i class="fa fa-mortar-board pull-left"></i> 
                                                    <div class="media-body">
                                                        <?php //Yii::t('profession', 'Professions').' : '?> <?php //print_r(Person::getProfession($modelPerson->id_person)); ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <i class="fa fa-calendar pull-left"></i> 
                                                    <div class="media-body">
                                                        <?php //=$modelPerson->getAttributeLabel('birthday').' : '.Person::getBirthday($modelPerson->birthday) ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <i class="fa fa-venus-mars pull-left"></i> 
                                                    <div class="media-body">
                                                        <?php //=$modelPerson->getAttributeLabel('gender').' : '.Person::getGender($modelPerson->gender) ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <i class="fa fa-gavel pull-left"></i> 
                                                    <div class="media-body">
                                                         <?php //=Yii::t('marital-status', 'Marital Status').' : '.Person::getMaritalStatus($modelPerson->id_marital_status) ?>
                                                    </div>
                                                </div>
                                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <i class="icon icon-stack pull-left"></i>
                                    <div class="media-body">
                                        Estudio en la Universidad Privada del Valle
                                    </div>
                                </div> 
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <i class="icon icon-home-2 pull-left"></i>
                                    <div class="media-body">
                                        Vive en Cochabamba, Bolivia
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <i class="icon icon-compass pull-left"></i>
                                    <div class="media-body">
                                        De Sal, Cabo Verde 
                                    </div>
                                </div>
                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6 col-md-6 col-xs-6">
                                    <div class="block">          
                                        <h2><?=Yii::t('app', 'Friends') ?></h2>
                                        <div class="config">  
                                            <a data-target="#addNew-todo" data-toggle="tooltip" class="ttips" title="Agregar Nuevo" data-original-title="Agregar Nuevo" href="">
                                                <i class="fa fa-plus add-new-todo"></i>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Settings" class="ttips">
                                                <i class="icon-wrench"></i>
                                            </a>
                                        </div>
<div class="box-view">
    <a class="box-item" href="#"><img title="Ricardo Evora Delgado" alt="Ricardo Evora Delgado" src="../../common/uploads/1.jpg" style="width:60px; height:60px;">
    </a>
    <a class="box-item" href="#"><img title="Fidel Fonseca" alt="Fidel Fonseca" src="../../common/uploads/2.jpg" style="width:60px; height:60px;">
    </a>
    <a class="box-item" href="#"><img title="Vandro Neves" alt="Vandro Neves" src="../../common/uploads/3.jpg" style="width:60px; height:60px;">
    </a>
    <a class="box-item" href="#"><img title="Fabio Santos" alt="Fabio Santos" src="../../common/uploads/4.jpg" style="width:60px; height:60px;">
    </a>
    <a class="box-item" href="#"><img title="Apps CV" alt="Apps CV" src="../../common/uploads/5.jpg" style="width:60px; height:60px;">
    </a>
    <a class="box-item" href="#"><img title="Apps CV" alt="Apps CV" src="../../common/uploads/6.jpg" style="width:60px; height:60px;">
    </a>
    <a class="box-item" href="#"><img title="Apps CV" alt="Apps CV" src="../../common/uploads/7.jpg" style="width:60px; height:60px;">
    </a>
</div>
                                        <!--<div class="box-view">-->
                                            <?php // print_r(Contact::getAllContact()); 
/*
foreach ($modelPerson as $person){
	$src=($person->photo) && file_exists(Yii::getAlias('@webroot') . $person->photo)
    		? Yii::$app->request->baseUrl.$person->photo
    		: '../web/img/guest.jpg';
	$list .= '<a href="#" class="box-item"><img style="width:60px; height:60px;" src="'.$src.'" 
	alt="'.$person->person_name.' '.$person->last_name.'" title="'.$person->person_name.' '.$person->last_name.'"></a>';         
}
*/

?>
                                        <!--</div>-->
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
