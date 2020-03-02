<?php
$this->breadcrumbs=array(
    'Dashboard',
);
?>
<?php
$session = new CHttpSession;
$session->open();
$login_admin = $session['login'];
?>
<div class="pageheader">
    
    <div class="pageicon"><span class="fa fa-laptop"></span></div>
    <div class="pagetitle">
        <h5>All Features Summary</h5>
        <h1>Dashboard</h1>
    </div>
</div><!--pageheader-->

<div class="maincontent">
    <div class="maincontentinner">
        <div class="row-fluid">
            <div id="dashboard-left" class="span8">
                    <h5 class="subtitle">Menu</h5>
                
                    <ul class="shortcuts">
                        <?php if ($login_admin['type'] == 'root'): ?>
                        <li class="products">
                            <a href="<?php echo CHtml::normalizeUrl(array('/admin/customer/index')); ?>">
                                <i class="icon-cms fa fa-users"></i>
                                <span class="shortcuts-label">Member List</span>
                            </a>
                        </li>
                        <?php endif ?>
                </ul>

            </div> <!-- span-8 -->
            
            <div id="dashboard-right" class="span4">

                <h5 class="subtitle">Announcements</h5>
                <div class="alert alert-block">
                    <p>Dokumentasi: <br>
                    download file di bawah ini</p>
                </div>
                <!-- <div class="divider15"></div>
                
                <div class="alert alert-block">
                      <button data-dismiss="alert" class="close" type="button">&times;</button>
                      <h4>Warning!</h4>
                      <p style="margin: 8px 0">Download User Guide <a href="<?php echo Yii::app()->baseUrl.'/images/User Guide - Trias.pdf' ?>">here</a> </p>
                </div> -->
                
                <br />
                                        
            </div><!--span4-->
        </div><!--row-fluid-->
        
        <div class="footer">
            <div class="footer-left">
                <span>Copyright &copy; <?php echo date('Y'); ?> by <?php echo Yii::app()->name ?>.</span>
            </div>
            <div class="footer-right">
                <span>All Rights Reserved.</span>
            </div>
        </div><!--footer-->
        
    </div><!--maincontentinner-->
</div><!--maincontent-->