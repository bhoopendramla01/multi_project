<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Product Page</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.js"></script>
</head>

<body>
    <form action="<?php echo base_url() ?>index.php/ProductController/storeProduct" method="post">
        <input type="hidden" name="refId" id="refId" value="<?php if(isset($_GET['refId']) != "") echo $_GET['refId']; else echo ''; ?>">
        <div class="container mt-4">
            <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="<?php echo set_value('name'); ?>">
                <?php
                echo form_error("name");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" value="<?php echo set_value('email'); ?>">
                <?php
                echo form_error("email");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="phone">Mobile No</label>
                <input class="form-control" type="number" name="phone" id="phone" placeholder="Mobile Number" value="<?php echo set_value('phone'); ?>">
                <?php
                echo form_error("phone");
                ?>
            </div>
            <div class="col-md-6 form-group">
                <label for="address">Address</label>
                <input class="form-control" type="text" name="address" id="address" placeholder="Address" value="<?php echo set_value('address'); ?>">
                <?php
                echo form_error("address");
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
                <button class="btn btn-primary btn-sm" type="submit">Register</button>
            </div>
        </div>
    </form>
</body>

</html>