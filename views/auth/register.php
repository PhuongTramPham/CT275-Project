<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<img src="/images/slider-image-1-1920x900.jpg" alt="" style="width: 100%; height: 90px; object-fit: cover; ">

<div class="container">
    <div class="row">
        <div class="col-md">
        </div>
        <div class="col-md-8 col-md-offset-2" style="margin-top: 40px; margin-bottom: 40px">
            <div class="">
                <h2 class="panel-heading"><b>Register</b></h2>
                <div class="">

                    <form class="form-horizontal" role="form" method="POST" action="/register">

                        <div class="form-group row <?=isset($errors['name']) ? ' has-error' : '' ?>">
                            <label for="name" class="col-md-4 control-label">Name:</label>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" 
                                    value="<?=isset($old['name']) ? $this->e($old['name']) : '' ?>" required autofocus>

                                <?php if (isset($errors['name'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['name'])?></strong>
                                    </span>
                                <?php endif ?>                                  
                            </div>
                        </div>

                        <div class="form-group row <?=isset($errors['email']) ? ' has-error' : '' ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address:</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" 
                                    value="<?=isset($old['email']) ? $this->e($old['email']) : '' ?>" required>

                                <?php if (isset($errors['email'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['email'])?></strong>
                                    </span>
                                <?php endif ?>       
                            </div>
                        </div>

                       <div class="form-group row <?=isset($errors['password']) ? ' has-error' : '' ?>">
                            <label for="password" class="col-md-4 control-label">Password:</label>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if (isset($errors['password'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['password'])?></strong>
                                    </span>
                                <?php endif ?>                                  
                            </div>
                        </div>

                       <div class="form-group row <?=isset($errors['password_confirmation']) ? ' has-error' : '' ?>">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password:</label>
                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                <?php if (isset($errors['password_confirmation'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['password_confirmation'])?></strong>
                                    </span>
                                <?php endif ?>                                  
                            </div>
                        </div>                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>

                                <a class="btn btn-link" href="/login">
                                    Do not have an account?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md">
        </div>
    </div>
</div>
<?php $this->stop() ?>
