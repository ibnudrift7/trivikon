
<div class="sidenav">
         <div class="login-main-text">
            <h2>TRIVIKON<br> Login Page</h2>
            <p>Login from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>Username</label>
                     <input type="text" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="button" class="btn btn-black" onclick="window.open('<?php echo CHtml::normalizeUrl(array('/home/logged')); ?>', '_SELF');">Login</button>
               </form>
            </div>
         </div>
      </div>