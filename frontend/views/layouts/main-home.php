<?php

use frontend\assets\HomeAppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
$asset = HomeAppAsset::register($this);
#echo'<pre>';
#print_r($asset);
#exit;
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <link rel="shortcut icon" href="theme/fullpage/assets/images/logo.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
<?php $this->head() ?>
    </head>
    <body class="login-page">

<?php $this->beginBody() ?>
<section id="menu-0">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="#" class="navbar-logo"><img src="theme/fullpage/assets/images/logo.png" alt="ConbioWeb">
                        </a>
                        <a class="navbar-caption" href="#">ConbioWeb</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <!--                                <li class="nav-item">
                                    <a class="nav-link link" href="#">OVERVIEW</a>
                                </li>-->
                        <li class="nav-item nav-btn">
                            <?=Html::a( '<b>Loguear</b>', [ '/user/login'], [ 'class'=> "nav-link btn btn-white btn-white-outline"]) ?>                           
                        </li>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="#">best bootstrap web builder</a>
</section>
<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider-4">
    <div>
        <div>
            <div>
                <ol class="carousel-indicators">
                    <li data-app-prevent-settings="" data-target="#slider-4" class="active" data-slide-to="0"></li>
                    <li data-app-prevent-settings="" data-target="#slider-4" data-slide-to="1"></li>
                    <li data-app-prevent-settings="" data-target="#slider-4" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active" data-bg-video-slide="false" style="background-image: url('theme/fullpage/assets/images/2004.10.Pampas 118-fa859b35dd.png');">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-xs-center">
                                        <h2 class="mbr-section-title display-1">FULL SCREEN SLIDER</h2>
                                        <p class="mbr-section-lead lead">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>

                                        <div class="mbr-section-btn"><a class="btn btn-lg btn-success" href="#">FOR WINDOWS</a> <a class="btn btn-lg btn-white btn-white-outline" href="#">FOR MAC</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false"  style="background-image: url(theme/fullpage/assets/images/09.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h2 class="mbr-section-title display-1">VIDEO SLIDE</h2>
                                        <p class="mbr-section-lead lead">Slide with youtube video background and color overlay. Title and text are aligned to the left.</p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(theme/fullpage/assets/images/928486palcacaonnearlapazhf.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">IMAGE SLIDE</h2>
                                        <p class="mbr-section-lead lead">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>

                                        <div class="mbr-section-btn"><a class="btn btn-lg btn-info" href="#">FOR WINDOWS</a> <a class="btn btn-lg btn-white btn-white-outline" href="#">FOR MAC</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-4">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-4">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery1-6" data-filter="true" style="background-color: rgb(111, 194, 0); padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Filter -->
    <div class="mbr-gallery-filter container gallery-filter-active">
        <ul>
            <li class="mbr-gallery-filter-all active">Todos</li>
        </ul>
    </div>

    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Paisajes" data-video-url="false">
                        <div href="#lb-gallery1-6" data-slide-to="0" data-toggle="modal">



                            <img alt="" src="theme/fullpage/assets/images/gallery_196_98_42911.jpg">

                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0 video-slide" data-tags="Video" data-video-url="https://www.youtube.com/watch?v=7O1ahVuktSk">
                        <div href="#lb-gallery1-6" data-slide-to="1" data-toggle="modal">
                            <div></div>
                            <img alt="" src="theme/fullpage/assets/images/preview.jpg">
                            <span class="icon-video"></span>

                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Fauna" data-video-url="false">
                        <div href="#lb-gallery1-6" data-slide-to="2" data-toggle="modal">



                            <img alt="" src="theme/fullpage/assets/images/chaetophractus-vellerosus.jpg">

                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>                    
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0 video-slide" data-tags="Video" data-video-url="https://www.youtube.com/watch?v=3oDyrqlRBs0">
                        <div href="#lb-gallery1-6" data-slide-to="3" data-toggle="modal">
                            <div></div>
                            <img alt="" src="theme/fullpage/assets/images/preview.jpg">
                            <span class="icon-video"></span>

                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Lo Malo" data-video-url="false">
                        <div href="#lb-gallery1-6" data-slide-to="4" data-toggle="modal">



                            <img alt="" src="theme/fullpage/assets/images/Basura 18 abril2010.jpg">

                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Fauna" data-video-url="false">
                        <div href="#lb-gallery1-6" data-slide-to="5" data-toggle="modal">



                            <img alt="" src="theme/fullpage/assets/images/FB_IMG_1478968994054.jpg">

                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Paisajes" data-video-url="false">
                        <div href="#lb-gallery1-6" data-slide-to="6" data-toggle="modal">



                            <img alt="" src="theme/fullpage/assets/images/FB_IMG_1478969140332.jpg">

                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p0" data-tags="Flora" data-video-url="false">
                        <div href="#lb-gallery1-6" data-slide-to="7" data-toggle="modal">



                            <img alt="" src="theme/fullpage/assets/images/flora.jpg">

                            <span class="icon-focus"></span>
                            <span class="mbr-gallery-title">Type caption here</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-6">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-6" data-slide-to="0"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-6" class=" active" data-slide-to="1"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-6" data-slide-to="2"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-6" data-slide-to="3"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-6" data-slide-to="4"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-6" data-slide-to="5"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-6" data-slide-to="6"></li>
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-6" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img alt="" src="theme/fullpage/assets/images/gallery_196_98_42911.jpg">
                        </div>
                        <div class="carousel-item active video-container">
                            <img alt="" src="theme/fullpage/assets/images/preview.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt="" src="theme/fullpage/assets/images/chaetophractus-vellerosus.jpg">
                        </div>
                        <div class="carousel-item video-container">
                            <img alt="" src="theme/fullpage/assets/images/preview.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt="" src="theme/fullpage/assets/images/Basura 18 abril2010.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt="" src="theme/fullpage/assets/images/FB_IMG_1478968994054.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt="" src="theme/fullpage/assets/images/FB_IMG_1478969140332.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt="" src="theme/fullpage/assets/images/flora.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-6">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-6">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-parallax-background" id="testimonials2-c" style="background-image: url(theme/fullpage/assets/images/FB_IMG_1478969140332.jpg); padding-top: 40px; padding-bottom: 40px;">



    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">WHAT OUR FANTASTIC USERS SAY</h3>
                    <small class="mbr-section-subtitle">Shape your future web project with sharp design and refine coded functions.</small>
                </div>
            </div>
        </div>
    </div>


    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block">
                            <p>“its really very amazing app that makes me finish html page in 3 minutes ( that's usually takes more than 1 hours at least from me if i did it from scratch). i hope to have very big library and plugins for this APP thanks again for your nice application”</p>
                        </div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="theme/fullpage/assets/images/1.jpg" class="img-circle">
                            </div>
                            <div style="margin: 0% auto; width: 267px; background: rgba(244, 244, 244, 0.3) none repeat scroll 0px 0px;">
                                <div class="mbr-author-name">John Smith</div>
                                <small class="mbr-author-desc">Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block">
                            <p>“First of all hands off to you guys for your effort and nice, super tool. Good work ConbioWeb team. We are expecting the new version soon with advance functionality with full bootstrap design. Great effort and super UI experience with easy drag &amp; drop with no time design bootstrap builder in present web design world.”</p>
                        </div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="theme/fullpage/assets/images/2.jpg" class="img-circle">
                            </div>
                            <div style="margin: 0% auto; width: 267px; background: rgba(244, 244, 244, 0.3) none repeat scroll 0px 0px;">
                                <div class="mbr-author-name">John Smith</div>
                                <small class="mbr-author-desc">Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block">
                            <p>“At first view, looks like a nice innovative tool, i like the great focus and time that was given to the responsive design, i also like the simple and clear drag and drop features. Give me more control over the object's properties and ill be using this tool for more serious projects. Regards.”</p>
                        </div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="theme/fullpage/assets/images/3.jpg" class="img-circle">
                            </div>
                            <div style="margin: 0% auto; width: 267px; background: rgba(244, 244, 244, 0.3) none repeat scroll 0px 0px;">
                                <div class="mbr-author-name">John Smith</div>
                                <small class="mbr-author-desc">Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae sed modi a ullam sint adipisci rerum vel praesentium voluptas deserunt veniam provident culpa sequi veritatis.”</p>
                        </div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="theme/fullpage/assets/images/4.jpg" class="img-circle">
                            </div>
                            <div style="margin: 0% auto; width: 267px; background: rgba(244, 244, 244, 0.3) none repeat scroll 0px 0px;">
                                <div class="mbr-author-name">John Smith</div>
                                <small class="mbr-author-desc">Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae sed modi a ullam sint adipisci rerum vel praesentium voluptas deserunt veniam provident culpa sequi veritatis.”</p>
                        </div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="theme/fullpage/assets/images/5.jpg" class="img-circle">
                            </div>
                            <div style="margin: 0% auto; width: 267px; background: rgba(244, 244, 244, 0.3) none repeat scroll 0px 0px;">
                                <div class="mbr-author-name">John Smith</div>
                                <small class="mbr-author-desc">Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae sed modi a ullam sint adipisci rerum vel praesentium voluptas deserunt veniam provident culpa sequi veritatis.”</p>
                        </div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="theme/fullpage/assets/images/6.jpg" class="img-circle">
                            </div>
                            <div style="margin: 0% auto; width: 267px; background: rgba(244, 244, 244, 0.3) none repeat scroll 0px 0px;">
                                <div class="mbr-author-name">John Smith</div>
                                <small class="mbr-author-desc">Developer</small>
                            </div>
                        </div>
                    </div>
                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae sed modi a ullam sint adipisci rerum vel praesentium voluptas deserunt veniam provident culpa sequi veritatis.”</p>
                        </div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="theme/fullpage/assets/images/7.jpg" class="img-circle">
                            </div>
                            <div style="margin: 0% auto; width: 267px; background: rgba(244, 244, 244, 0.3) none repeat scroll 0px 0px;">
                                <div class="mbr-author-name">John Smith</div>
                                <small class="mbr-author-desc">Developer</small>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<section class="mbr-section mbr-section-md-padding mbr-parallax-background" id="social-buttons2-d" style="background-image: url('theme/fullpage/assets/images/foto2-cabecera.jpg'); padding-top: 90px; padding-bottom: 90px;">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">FOLLOW US</h3>
                <div><a class="btn btn-social" title="Twitter" target="_blank" href="https://twitter.com/ConbioWeb"><i class="socicon socicon-twitter"></i></a> <a class="btn btn-social" title="Facebook" target="_blank" href="https://www.facebook.com/Conbioweb-2132651010292752/?fref=ts"><i class="socicon socicon-facebook"></i></a> <a class="btn btn-social" title="Google+" target="_blank" href="https://plus.google.com/u/0/+ConbioWeb/posts"><i class="socicon socicon-google"></i></a> <a class="btn btn-social" title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw"><i class="socicon socicon-youtube"></i></a> <a class="btn btn-social" title="Instagram" target="_blank" href="https://instagram.com/ConbioWeb/"><i class="socicon socicon-instagram"></i></a> <a class="btn btn-social" title="LinkedIn" target="_blank" href="https://www.linkedin.com/in/ConbioWeb"><i class="socicon socicon-linkedin"></i></a> </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-parallax-background" id="form1-e" style="background-image: url(theme/fullpage/assets/images/llamas.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">CONTACT FORM</h3>
                    <small class="mbr-section-subtitle">Shape your future web project with sharp design and refine coded functions.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                    <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
                    </div>


                    <form action="#" method="post" data-form-title="CONTACT FORM">

                        <input type="hidden" value="PcUdL0WpyQpXoF7P47sD0MDYaKGW2Lx7S4SJlKJt0GAE9Us6eM4CeBwOAB+yQNaC2cK8/da98JG+bp0en2ZESzwbKOlOCBEmcWVE3kgIxYeAgOVZcUYtp7AsguGoH/BX" data-form-email="true">

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
<!--                                    <label class="form-control-label" for="form1-e-name">Name<span class="form-asterisk">*</span>
                                    </label>-->
                                    <input placeholder="Name" type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-e-name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
<!--                                    <label class="form-control-label" for="form1-e-email">Email<span class="form-asterisk">*</span>-->
                                    </label>
                                    <input placeholder="Email" type="email" class="form-control" name="email" required="" data-form-field="Email" id="form1-e-email">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <!--<label class="form-control-label" for="form1-e-phone">Phone</label>-->
                                    <input placeholder="Phone" type="tel" class="form-control" name="phone" data-form-field="Phone" id="form1-e-phone">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <!--<label class="form-control-label" for="form1-e-message">Message</label>-->
                            <textarea placeholder="Message" class="form-control" name="message" rows="7" data-form-field="Message" id="form1-e-message"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">CONTACT US</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="contacts2-g" style="background-color: rgb(111, 194, 0); padding-top: 90px; padding-bottom: 90px;">

    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Address</strong>
                    <br> 1234 Street Name
                    <br> City, AA 99999
                    <br>
                    <br>
                    <br>
                    <strong>Contacts</strong>
                    <br> Email: support@ConbioWeb.com
                    <br> Phone: +1 (0) 000 0000 001
                    <br> Fax: +1 (0) 000 0000 002</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3"><strong>Links</strong>
                <ul>
                    <li><a class="text-white" href="#">Website builder</a>
                    </li>
                    <li><a class="text-white" href="#">Download for Windows</a>
                    </li>
                    <li><a class="text-white" href="#">Download for Mac</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="mbr-map">
                    <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJzUUDSIggX5ERLuo5VRREw2Y" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
