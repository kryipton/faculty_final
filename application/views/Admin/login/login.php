
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="<?php echo base_url('public/css/login_css.css') ?>">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                ADMIN PANEL
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form method="post" action="<?php echo base_url('himalaY_secure_act')?>">
                        <?php if ($this->session->flashdata('fail')) {?>
                            <div class="alert alert-danger">
                                <?php
                                echo $this->session->flashdata('fail');
                                ?>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label class="form-control-label">İstifadəçi adı</label>
                            <input type="text" class="form-control" name="usr">
                        </div>
                        <?php if (isset($form_error)){?>
                            <small  style="color:red; float: right"> <?php echo form_error("usr");?> </small>
                        <?php }?>

                        <div class="form-group">
                            <label class="form-control-label">Şifrə</label>
                            <input type="password" class="form-control" name="psw">
                        </div>
                        <?php if (isset($form_error)){?>
                            <small  style="color:red; float: right"> <?php echo form_error("psw");?> </small>
                        <?php }?>
                        <br>
                        <br>
                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">Giriş</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>




</body>
</html>