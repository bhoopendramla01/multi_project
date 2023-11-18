<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.js"></script>
</head>

<body>
    <form action="<?php echo base_url() ?>index.php/AuthController/signin" method="post">
        <input type="hidden" name="refId" id="refId">
        <div class="container mt-4">
            <div class="col-md-6 form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" value="<?php echo set_value('email'); ?>">
                <?php
                echo form_error("email");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
                <?php
                echo form_error("password");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <button class="btn btn-primary btn-sm" type="submit">Log in</button>
            </div>
        </div>
    </form>
</body>

</html>