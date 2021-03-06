<!-- loginpanel -->
<div class="outer-login">
    <div class="in">
        <div class="loginpanelinner">
            <div class="logo text-logo">
                Trivikon
            </div>
                <?php /** @var BootActiveForm $form */
                    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                        'id'=>'verticalForm',
                        //'htmlOptions'=>array('class'=>'well'),
                        'enableClientValidation'=>false,
                        'clientOptions'=>array(
                            'validateOnSubmit'=>false,
                        ),
                    )); ?>
                <div class="inputwrapper login-alert">
                    <div class="alert alert-error">Invalid username or password</div>
                </div>
                <div class="mylogin">
                    <input type="text" name="LoginForm[username]" placeholder="Enter username" class="form-control" />
                </div>
                <div class="mylogin">
                    <input type="password" name="LoginForm[password]" placeholder="Enter password" class="form-control" />
                </div>
                <div class="mylogin">
                    <button name="submit">Sign In</button>
                </div>
                <div class="mylogin mesign">
                    <label><input type="checkbox" class="remember" name="signin" /> Keep me sign in</label>
                </div>
                
            <?php $this->endWidget(); ?>
        </div><!--loginpanelinner-->
    </div>
</div><!--loginpanel-->
<style type="text/css">
    html,
    body,
    .container{
        height: 100%;
    }
    .outer-login{
        display: table;
        width: 100%;
        height: 95%;
    }
    .outer-login .in{
        display: table-cell;
        text-align: center;
        vertical-align: middle;
    }
    .mylogin input{
        border: 0;
        padding: 10px;
        background: #fff;
        width: 250px;
    }
    .mylogin button{
        display: block;
        border: 1px solid #a0a0a0;
        padding: 10px;
        background: #949494;
        width: 100%;
        color: #fff;
        text-transform: uppercase;
        font-family: 'LatoBold', 'Helvetica Neue', Helvetica, sans-serif;
        font-weight: normal;
        font-size: 13px;
    }
    .loginpanelinner .logo.text-logo{
        margin-bottom: 0;
    }
    .text-logo{
        font-size: 30px;
        font-weight: 700;
        color: #fff;
    }
    .mylogin.mesign{
        text-align: left;
    }
    .mylogin label {
        display: inline-block;
        margin-top: 10px;
        color: rgba(255,255,255,0.8);
        font-size: 11px;
        vertical-align: middle;
    }
    .mylogin label input {
        width: auto;
        margin: -3px 5px 0 0;
        vertical-align: middle;
    }
    .mylogin .remember {
        padding: 0;
        background: none;
    }
    .loginpanelinner{
        position: relative;
        top: inherit; 
        left: inherit; 
        width: 270px;
        margin: 0 auto;
    }
    #pushstat{
        display: none;
    }
    .loginpanelinner .logo{
        width: auto;
        background-color: transparent;
        padding: 0.8em 1.5em;
        margin-bottom: 1em;
    }
    .loginpanelinner .logo > img{
        max-width: 230px; display: block; margin: 0 auto;
    }
</style>