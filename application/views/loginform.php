<br/><br/><br/>
<div class="row">
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Please sign in</h3>
     </div>
      <div class="panel-body">
        <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
        <?  } ?>
        <form accept-charset="UTF-8" role="form" method="post" action="<?= base_url();?>loginuser/login">
                <fieldset>
            <div class="form-group <?= (form_error('username')?'has-error':null)?>">
              <input class="form-control" placeholder="Username" name="username" type="text" value="<?php echo set_value('username'); ?>">
          </div>
          <div class="form-group <?= (form_error('password')?'has-error':null)?>">
            <input class="form-control" placeholder="Password" name="password" type="password" value="">
          </div>
          <!--<div class="checkbox">
              <label>
                <input name="remember" type="checkbox" value="Remember Me"> Remember Me
              </label>
            </div>-->
          <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
        </fieldset>
          </form>
      </div>
  </div>
</div>
</div>
