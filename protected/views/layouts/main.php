<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="language" content="<?php echo Yii::app()->language ?>" />

	<meta name="keywords" content="<?php echo CHtml::encode($this->metaKey); ?>">
	<meta name="description" content="<?php echo CHtml::encode($this->metaDesc); ?>">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- FONT AWESOME -->
    <!-- <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/font-awesome-4.2.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- STYLE -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/styles.css">

    <!-- RESPONSIVE DEVICE -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/css/media.styles.css">
    
    <!-- FONT AWESOME -->
    <?php /*<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/js/clock_assets/flipclock.css">
    <script src="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/js/clock_assets/flipclock.js"></script>
    <script src="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/js/clock_assets/jquery.countdown.min.js"></script>
    <!-- All JS -->
    <script type="text/javascript">
        var baseurl = "<?php echo CHtml::normalizeUrl(array('/')); ?>";
        var url_add_cart_action = "<?php echo CHtml::normalizeUrl(array('/product/addCart')); ?>";
        var url_edit_cart_action = "<?php echo CHtml::normalizeUrl(array('/product/edit')); ?>";
    </script>
    <!-- <script src="<?php echo Yii::app()->baseUrl.Yii::app()->theme->baseUrl; ?>/asset/js/all.js"></script> -->
    */ ?>

    <?php echo $this->setting['google_tools_webmaster']; ?>
    <?php echo $this->setting['google_tools_analytic']; ?>
    <?php if ($this->setting['purechat_status'] == '1'): ?>
    <?php echo $this->setting['purechat_code'] ?>
    <?php endif ?>
</head>
<body>
<?php 
/*
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=578821772130895";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
*/
 ?>
    <?php echo $content ?>
    
    <!-- <div id="back-top" class="t-backtop" style="display: none;">
    <div class="clear height-5"></div>
        <a href="#top"><i class="fas fa-chevron-up"></i></a>
    </div> -->
    
    <script type="text/javascript">
    // $(window).on("load", function (e) {
    //     $('.t-backtop').hide();
    // });

    $(document).ready(function(){
        $('.t-backtop, .back_to_top').click(function (e) {
               e.preventDefault();
                $('html, body').animate({
                    'scrollTop': $('body').offset().top
                }, 1000);
        });

    });  
    </script>
</body>
</html>