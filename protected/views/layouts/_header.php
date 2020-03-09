<?php 
    $e_activemenu = $this->action->id;
    $controllers_ac = $this->id;
    $session=new CHttpSession;
    $session->open();
    $login_member = $session['login_member'];

    $active_menu_pg = $controllers_ac.'/'.$e_activemenu;
?>
<!-- <header class="header sticky-top <?php if ($active_menu_pg == 'home/index'): ?>homepages<?php endif ?>">
  <div class="prelative container d-none d-sm-none d-md-block d-lg-block">
  </div>
</header> -->

<header>

  <div class="navbar navbar-dark bg-dark box-shadow">
    <div class="container d-flex justify-content-between">
      <a href="<?php echo CHtml::normalizeUrl(array('/home')); ?>" class="navbar-brand d-flex align-items-center">
        <strong>TRIVIKON</strong>
      </a>
      <span class="rights_tntop">Selamat datang, <?php echo ucwords($login_member['first_name']) ?> &nbsp;|&nbsp; <a href="<?php echo CHtml::normalizeUrl(array('/home/logout')); ?>">Logout</a></span>
    </div>
  </div>
      
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>