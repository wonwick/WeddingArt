<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wedding Art| Register</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="js/jquery.min.js"></script>
    </head>
<body>

    <div class="about-top">
        <div class="wrap">
            <div class="about-box">
                <div class="section group">
                    <div class="col span_2_of_3">
                        <h2>User Registration</h2>
                        <div class="contact-form">


    <form action="" method="post">
        <div class="contact-form">
            <span><label>Name</label></span>
            <input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
            <?php echo form_error('name','<span class="help-block">','</span>'); ?>
        </div>
        <div class="contact-form">
            <span><label>E-mail</label></span>
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="contact-form">
            <span><label>Contact Number</label></span>
            <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
        </div>
        <div class="contact-form">
            <span><label>Password</label></span>
            <input type="password" class="form-control" name="password" placeholder="Password" required="">
            <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="contact-form">
            <span><label>Re Enter Password</label></span>
            <input type="password" class="form-control" name="conf_password" placeholder="Confirm password" required="">
            <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
        </div>
        <div class="contact-form">
            <?php
            if(!empty($user['gender']) && $user['gender'] == 'Female'){
                $fcheck = 'checked="checked"';
                $mcheck = '';
            }else{
                $mcheck = 'checked="checked"';
                $fcheck = '';
            }
            ?>
            <div class="contact-form">
                <label>
                    <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
                    Male
                </label>
            </div>
            <div class="contact-form">
                <label>
                    <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                    Female
                </label>
            </div>
        </div>
        <div class="contact-form">
            <input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
        </div>
    </form>
    <p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>
</div>
</body>
</html>